<?php

require_once 'requirements.php';

/*
 *  `get_rolsa_logo`
 * returns a an associative array of the logo.
 * ```php
 * <img src="get_rolsa_logo()['src']" alt="get_rolsa_logo()['alt']">#
 * ```
 **/
function get_rolsa_logo(): ?array {
    return [
        'src' => '../assets/images/logo.svg',
        'alt' => 'Rolsa logo',
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
 * retrieves the user or null from cookies
 **/
function get_user(): array | null {
    if (isset($_COOKIE['user'])) {
        return [
            'name' => $_COOKIE['user']['username'] ?? 'your name',
            'email' => $_COOKIE['user']['email'] ?? 'example@email.com',
            'password' => $_COOKIE['user']['password'] ?? 'password',
            'hashed_password' => $_COOKIE['user']['hashed_password'] ?? hash_password('password'),
            'img_url' => $_COOKIE['user']['img_url'] ?? '../assets/images/placeholder.png',
        ];
    }
    
    // else
    return null;
}

/*
 * returns a string of the navbar in html, to be put into a tag.
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
    $navbar_lines[] = "<img class=\"logo\" src=\"" . get_rolsa_logo()['src'] . "\" alt=\"" . get_rolsa_logo()['alt'] . "\">";

    // creates the parent tag for the links
    $navbar_lines[] = "<ul class=\"links\">";

    // adds each link inturn
    foreach ( get_nav_bar_links() as $link_name => $path) {
        $navbar_lines[] = "<a href=\"" . $path . "\">" . $link_name . "</a>";
    }

    // closes the links tag
    $navbar_lines[] = "</ul>";

    // adds the profile of the user if applicable
    if (get_user() != null) {
        // create the parent link for the user
        $navbar_lines[] = "<a class=\"account-icon\">";

        // makes a link adds the user's profile picture
        $navbar_lines[] = "<img src=\"" . get_user()['img_url'] . "\" alt=\"profile picture\">";

        // adds their username
        $navbar_lines[] = "<p class=\"username\">" . get_user()['name'] . "</p>";

        // closes the parent tag for the user
        $navbar_lines[] = "</a>";
    }
    // if the user is not logged in then it shows the log in button
    else {
        $navbar_lines[] = "<a class=\"login-button\" href=\"../(account)/\">Login</a>";
    }

    // closes the parent tag for the nav bar
    $navbar_lines[] = "</nav>";

    // renders the navbar and joins it on `\n`
    return implode(separator: "\n", array: $navbar_lines);
}
