<!DOCTYPE html>
<html lang="en">
<?php
require_once '../php/requirements.php';
if (!is_user_logged_in()) {
        error_and_reroute('please login into an account to view accounts page', '../(login)/');
}
$user = fetch_cookie('user');
?>
<head>
        <?= render_header('account') ?>
</head>
<body>
        <?= render_navbar() ?>

        <main class="account">
                <form action="update_account_info.php" class="account-form" method="post">
                        <div class="email-input">
                                <label for="email" class="label">email</label>
                                <input type="email" name="email" id="email" required value="<?= fetch_cookie(name: 'tmp_email', unset_value: true) ?? $user['email'] ?>">
                        </div>

                        <div class="name-input">
                                <label for="username" class="label">name</label>
                                <input type="username" name="username" id="username" required value="<?= fetch_cookie(name: 'tmp_username', unset_value: true) ?? $user['username'] ?>">
                        </div>
                        
                        <div class="password-input">
                                <label for="password" class="label">password</label>
                                <input type="password" name="password" id="password" required value="<?= fetch_cookie(name: 'tmp_password', unset_value: true) ?? $user['password'] ?>">
                        </div>

                        <div class="password-conf-input">
                                <label for="password-conf" class="label">confirm password</label>
                                <input type="password-conf" name="password-conf" id="password-conf" required value="<?= fetch_cookie(name: 'tmp_password_conf', unset_value: true) ?? $user['password'] ?>">
                        </div>

                        <button type="button" onclick="togglePasswords(['password', 'password-conf'])">toggle password</button>

                        <div class="img-url-input">
                                <label for="img-url">profile picture</label>
                                <input type="file" name="img-url" id="img-url" value="upload" placeholder="../assets/images/placeholder-profile.jpg" value="<?= fetch_cookie(name: 'tmp_img_url', unset_value: true) ?? $user['img_url'] ?>">
                        </div>

                        
                        <!-- displays an error message if one is applicable -->
                        <?php
                        // checks there is an error message to give
                        if (isset($_COOKIE['tmp_error_message'])): ?>
                                <p class="small-error"><?= fetch_cookie(name: 'tmp_error_message', unset_value: true) ?></p>
                        <?php endif; ?>

                        <div class="account-options">
                                <input class="primary-button" type="submit" value="Update">
                                <div class="secondary-button">
                                        <a href="logout.php">logout</a>
                                </div>
                                <button type="button" class="delete-button" onclick="window.location.href = 'delete_account.php';">Delete account</button>
                        </div>
                </form>
        </main>

        <script src="../js/scripts.js"></script>
</body>
</html>