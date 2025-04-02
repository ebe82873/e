<?php

require_once '../php/requirements.php';

function main(): void {
    if (!is_user_logged_in()) {
        error_and_reroute('must be logged in to save score', '../(login)');
    }

    $user = fetch_cookie('user');

    $connection = get_database_connection();

    $query = "INSERT INTO carbon_footprints (tonnes, user_id) VALUES (\"" . $connection->real_escape_string($_GET['score']) . "\", \"" . $connection->real_escape_string($user['id']) . "\");";
    $connection->query($query);
    header('location: ../(home)/');
}

main();