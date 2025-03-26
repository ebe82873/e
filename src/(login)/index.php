<!DOCTYPE html>
<html lang="en">
<?php

require_once '../php/requirements.php';

?>
<head>
    <?= render_header(title: 'login') ?>
</head>
<body>
    <?= render_navbar() ?>

    <main class="login">
        <form action="login.php" method="post" class="login-form">
            <!-- email div to hold the user's email -->
            <div class="email">
                <label for="email" class="label">email</label>
                <!-- using cookies to hold the user's email if it is invalid and where sent back from the login -->
                <input type="email" name="email" placeholder="john.smith@example.com" required value="<?= fetch_cookie(name: 'tmp_email', default: 'e@e') ?>">
            </div>

            <!-- password element to hold the user's password input and the toggle password button -->
            <div class="password">
                <label for="password" class="label">password</label>
                <!-- using cookies to store the user's password if they where sent back from the login -->
                <input type="password" name="password" placeholder="password1234" required minlength="8" value="<?= fetch_cookie(name: 'tmp_password', default: '12345678') ?>">
                <button type="button" onclick="togglePassword(['password'])">toggle password</button>
            </div>

            <!-- displays an error message if one is applicable -->
            <?php
            // checks there is an error message to give
            if (isset($_COOKIE['tmp_error_message'])): ?>
                <p class="medium-error"><?= fetch_cookie(name: 'tmp_error_message', unset_value: true) ?></p>
            <?php endif; ?>

            <div class="account-options">
                <input type="submit" value="Login">
                <div class="secondary-button">
                    <a href="../(register)/">register</a>
                </div>
            </div>
        </form>
    </main>

    <script src="../js/scripts.js"></script>
</body>
</html>