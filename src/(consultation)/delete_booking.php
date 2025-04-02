<!DOCTYPE html>
<?php require_once '../php/requirements.php'; ?>
<html lang="en">
<head>
    <?= render_header(title: 'Delete booking'); ?>
</head>
<?php

function main(): void {
    $user = fetch_cookie(name: 'user');

    if(!is_user_logged_in()) {
        error_and_reroute(error_message: 'must be logged in to edit path: consolations', path: '../(login)/');
    }
    
    if (!isset($_GET['conf'])) {
        return;
    }

    $connection = get_database_connection();

    $query = "SELECT * FROM users WHERE password=\"" . $connection->real_escape_string($user['hashed_password']) . "\" AND email=\"" . $connection->real_escape_string($user['email']) . "\";";

    $result = $connection->query(query: $query)->fetch_assoc();   

    if ($result['ID'] != $user) {
        $user['id'] = $result['ID'];
    }

    $query = "SELECT * FROM bookings WHERE ID=\"" . $connection->real_escape_string(string: $_GET['id']) . "\";";

    $result = $connection->query(query: $query)->fetch_assoc();    

    if ($result['user_id'] != $user['id']) {
        error_and_reroute(error_message: 'ids do not match please login', path: '../(login)/');
    }

    $query = "DELETE FROM bookings WHERE ID=\"" . $connection->real_escape_string($_GET['id']) . "\";";

    
    $connection->query($query);

    header('location: ./');
}

main();

?>
<!-- could not get this to work as a popup -->
<body>
    <main class="delete-booking">
        <h2 class="title">delete booking <?= $_GET['id'] ?></h2>
        <p class="sub-text">deleting a booking will delete it forever.</p>
        <button onclick="window.location.href = 'delete_booking.php?id=<?= $_GET['id'] ?>&conf=1';" class="delete-button">delete</button>
        <button type="button" class="secondary-button" onclick="window.location.href = './';">cancel</button>
    </main>
</body>
</html>
