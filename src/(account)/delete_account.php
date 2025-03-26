<?php 

require_once '../php/requirements.php';

function main(): void {
    if (!is_user_logged_in()) {
        error_and_reroute('must be logged in to delete your account', '../(login)/');
    }

    $connection = get_database_connection();

    $user = fetch_cookie('user');

    $query = "SELECT ID FROM users WHERE email=\"" . $user['email'] . "\" and password=\"" . $user['hashed_password'] . "\";";

    $user_id = $connection->query($query)->fetch_assoc()['ID'];

    $query = "DELETE FROM users WHERE ID=\"" . $user_id . "\";";

    $connection->query($query);

    header('location: logout.php');
}

main();