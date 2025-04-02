<?php

require_once 'requirements.php';

/*
 *    `get_rolsa_logo`
 * returns a an associative array of the logo.
 * ```php
 * <img src="get_rolsa_logo()['src']" alt="get_rolsa_logo()['alt']">#
 * ```
 **/
function get_rolsa_logo(): ?array {
	return [
		'src' => '../assets/images/logo.svg',
		'alt' => 'Rolsa logo',
		'title' => 'Rolsa',
	];
}

/*
 * returns an accocitative array with links to the different pages for the nav bar.
 * each key is the name and value if the herf.
 **/
function get_nav_bar_links(): array {    
	return [
		'home' => '../(home)/',
		'consultation' => '../(consultation)/',
		'calculation' => '../(calculation)/',
	];
}

/*
 * returns a string of the navbar in HTML, to be put into a tag.
 * ```php
 * <?= render_navbar ?>
 * ```
 **/
function render_navbar(): string {
	// inits the lines for the nav bar
	$navbar_lines = [];

	// creates the parent tag of the navbar
	$navbar_lines[] = "<nav class=\"navbar\">";

	// adds the logo element to the tag
	$navbar_lines[] = "<img class=\"logo\" src=\"" . get_rolsa_logo()['src'] . "\" alt=\"" . get_rolsa_logo()['alt'] . "\" title=\"" . get_rolsa_logo()['title'] ."\" >";

	// creates the parent tag for the links
	$navbar_lines[] = "<ul class=\"links\">";

	// adds each link inturn
	foreach ( get_nav_bar_links() as $link_name => $path) {
		$navbar_lines[] = "<a href=\"" . $path . "\" title=\"" . strtolower(string: $link_name) . "\">" . $link_name . "</a>";
	}
	
	// closes the links tag
	$navbar_lines[] = "</ul>";

	$user = fetch_cookie(name: 'user');
	
	// adds the profile of the user if applicable
	if ($user != null) {
		// create the parent link for the user
		$navbar_lines[] = "<a class=\"account-icon\" href=\"../(account)\" title=\"account settings\">";
		
		// makes a link adds the user's profile picture
		$navbar_lines[] = "<img src=\"" . $user['img_url'] . "\" alt=\"profile picture\">";
		
		// adds their username
		$navbar_lines[] = "<p class=\"username\">" . $user['username'] . "</p>";

		// closes the parent tag for the user
		$navbar_lines[] = "</a>";
	}
	// if the user is not logged in then it shows the log in button
	else {
		// opens a parent tag to style the login button
		$navbar_lines[] = "<div class=\"login-button\" onclick=\"window.location.href = '../(login)/'\" title=\"login\">";
		
		// a link for the user to login
		$navbar_lines[] = "<a class=\"login-link\">Login</a>";

		// closes the parent tag
		$navbar_lines[] = "</div>";
	}

	// closes the parent tag for the nav bar
	$navbar_lines[] = "</nav>";

	// renders the navbar and joins it on `\n`
	return implode(separator: "\n", array: $navbar_lines);
}

/*
 * returns a rendered HTML string for the inside of the header tag
 * ```php
 * <head>
 *        <? render_header('page name') ?>
 * </head>
 **/
function render_header(string $title): string {
	$header_lines = [];

	// adds the encoding
	$header_lines[] = "<meta charset=\"UTF-8\">";

	// sets the start size of the website to fill the window
	$header_lines[] = "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";

	// adds the title for the page
	$header_lines[] = "<title>" . $title . "</title>";

	// links to the css
	$header_lines[] = "<link rel=\"stylesheet\" href=\"../css/styles.css\">";

	// links the favicon
	$header_lines[] = "<link rel=\"shortcut icon\" href=\"../assets/images/favicon.svg\" type=\"image/x-icon\">";

	// returns the header lines joined on `\n`
	return implode(separator:"\n", array: $header_lines);
}

/*
 * returns a rendered HTML string for the inside of the footer tag
 * ```php
 *        <?= render_footer() ?>
 * </body>
 **/
function render_footer(string $footer): string {
	$footer_lines = [];

	return implode(separator: '\n', array: $footer_lines);
}