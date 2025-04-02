<!DOCTYPE html>
<html lang="en">
<?php
require '../php/requirements.php';

if (!is_user_logged_in()) {
    error_and_reroute('please log in to see and make consultations', '../(login)/');
}

$user = fetch_cookie('user');

/*
 * gets all the bookings the user has
 **/
function get_users_bookings(int $user_id): mixed {
    $connection = get_database_connection();

    $query = "SELECT * FROM bookings WHERE user_id=\"" . $user_id . "\";";

    return $connection->query(query: $query)->getIterator();
}
?>
<head>
    <?= render_header(title: 'Your Consolations') ?>
</head>
<body>
    <?= render_navbar() ?>

    <main class="consolations">
        <section class="bookings">
            <?php
            $bookings = get_users_bookings($user['id']);

            if (!$bookings): ?>
                <p class="text">No bookings found</p>
            <?php else: ?>
                <?php foreach ($bookings as $booking): ?>
                    <div class="booking">
                        <div class="options">
                            <?php if ($booking['solar']): ?>
                                <span>solar</span>
                            <?php endif; if ($booking['smart_home']): ?>
                                <span>smart home</span>
                            <?php endif; if ($booking['ev_charger']): ?>
                                <span>ev charger</span>
                            <?php endif; ?> 
                        </div>

                        <p class="date"><?= $booking['date'] ?></p>

                        <button class="delete-button" onclick="togglePopup('delete-booking-<?= $booking['ID'] ?>');">Delete</button>
                        <div id="delete-booking<?= $booking['ID'] ?>" class="popup" hidden>
                                <button onclick="window.location.href='delete-booking.php?<?= $booking['ID'] ?>" class="delete-button">Delete booking</button>
                                <button onclick="togglePopup('delete-booking<?= $booking['ID'] ?>" class="secondary-button">Cancel</button>
                        </div>
                    </div>

                    <div hidden id="delete-booking-<?= $booking['ID'] ?>" class="popup">
                        <button type="button" class="secondary-button" onclick="togglePopup('delete-booking-<?= $booking['ID'] ?>');">cancel</button>
                        <button onclick="alert('window.location.href=`delete-booking.php?id=<?= $booking['ID'] ?>" class="delete-button">delete</button>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

            <button class="primary-button" style="width: 20rem" onclick="window.location.href = '../(book)/';">Book A Consultation</button>
        </section>
    </main>

    <script src="../js/popup.js"></script>
</body>
</html>