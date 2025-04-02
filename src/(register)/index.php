<!DOCTYPE html>
<html lang="en">
<?php
require_once '../php/requirements.php';
?>
<head>
	<?= render_header(title: 'register') ?>
</head>
<body>
	<?= render_navbar() ?>

	<main class="register">
		<form action="register.php" class="register-form" method="post">
			<div class="email-input">
				<label for="email" class="label">email</label>
				<input type="email" name="email" id="email" required value="<?= fetch_cookie(name: 'email', default: '', unset_value: true) ?>">
			</div>

			<div class="name-input">
				<label for="username" class="label">name</label>
				<input type="username" name="username" id="username" required value="<?= fetch_cookie(name: 'username', default: '', unset_value: true) ?>">
			</div>
			
			<div class="password-input">
				<label for="password" class="label">password</label>
				<input type="password" name="password" id="password" required value="<?= fetch_cookie(name: 'password', default: '', unset_value: true) ?>">
			</div>

			<div class="password-conf-input">
				<label for="password-conf" class="label">confirm password</label>
				<input type="password-conf" name="password-conf" id="password-conf" required value="<?= fetch_cookie(name: 'password-conf', default: '', unset_value: true) ?>">
			</div>

			<div class="img-url-input">
				<label for="img-url">profile picture</label>
				<input type="file" name="img-url" id="img-url" value="upload" placeholder="../assets/images/placeholder-profile.jpg">
			</div>

			
			<!-- displays an error message if one is applicable -->
			<?php
			// checks there is an error message to give
			if (isset($_COOKIE['tmp_error_message'])): ?>
				<p class="small-error"><?= fetch_cookie(name: 'tmp_error_message', unset_value: true) ?></p>
			<?php endif; ?>

			<div class="account-options">
				<input type="submit" value="Register">
				<div class="secondary-button">
					<a href="../(login)/">login</a>
				</div>
			</div>
		</form>
	</main>

	<script src="../js/scripts.js"></script>
</body>
</html>