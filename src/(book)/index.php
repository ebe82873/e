<!DOCTYPE html>
<html lang="en">
<?php
require_once '../php/requirements.php';
?>
<head>
    <?= render_header('book consultation') ?>
</head>
<body>
    <?= render_navbar() ?>

    <main class="book">
        <section class="create-booking">
            <form action="create_booking.php" class="create-booking" method="post">
                <!-- a container for the user to enter the options for their booking -->
                <div class="system">
                    <label class="label" for="solar-panel">solar panel</label>
                    <input type="checkbox" name="solar-panel" id="solar-panel" <?php if (fetch_cookie('tmp_solar-panel', unset_value: true)) { echo 'checked'; } ?>>

                    <label class="label" for="ev-charging">ev charging</label>
                    <input type="checkbox" name="ev-charging" id="ev-charging" value="<?php if (fetch_cookie('tmp_ev-charging', unset_value: true)) { echo 'checked'; } ?>">

                    <label class="label" for="smart-home">smart home</label>
                    <input type="checkbox" name="smart-home" id="smart-home" value="<?php if (fetch_cookie('tmp_smart-home', unset_value: true)) { echo 'checked'; } ?>">
                </div>

                <!-- a container for the user to enter a date -->
                <div class="date">
                    <label class="label" for="date">date</label>
                    <input type="date" name="date" id="date" required value="<?= fetch_cookie('tmp_date', unset_value: true) ?>">
                </div>

                <!-- a container for the user to enter their email -->
                <div class="email">
                    <label class="label" for="email">email</label>
                    <!-- pre-loads the email with their won email or has nothing there-->
                    <input type="email" name="email" id="email" value="<?= fetch_cookie(name: 'user', default: ['email' => fetch_cookie('tmp_email') ?? ''])['email'] ?>" required>
                </div>

                <!-- a container for the user to enter their address -->
                <div class="address">
                    <label class="label" for="address-lines-1">House name or number</label>
                    <input type="text" id="address-line-1" name="address-line-1" placeholder="64" required value="<?= fetch_cookie('tmp_address-line-1', unset_value: true) ?>">
                    
                    <label class="label" for="address-lines-2">address line 2</label>
                    <input type="text" id="address-line-2" name="address-line-2" placeholder="Norwich" value="<?= fetch_cookie('tmp_address-line-2', unset_value: true) ?>">

                    <label class="label" for="address-line-county">County</label>
                    <input type="text" id="address-line-county" name="address-line-county" placeholder="Norfolk" value="<?= fetch_cookie('tmp_address-line-county', unset_value: true) ?>">

                    <label class="label" for="ip-address">IP address</label>
                    <input type="text" id="ip-address" name="ip-address" placeholder="NR2 5BL" required value="<?= fetch_cookie('tmp_ip-address', unset_value: true) ?>">
                </div>

                <!-- displays an error message is one is applicable -->
                <?php
                $error_message = fetch_cookie(name: 'tmp_error_message', unset_value: true);
                if ($error_message): ?>
                    <p class="small-error"><?= $error_message ?></p>
                <?php endif; ?>

                <input type="submit" class="primary-button" value="Book">
            </form>
        </section>
    </main>
</body>
</html>