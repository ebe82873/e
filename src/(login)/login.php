<?php

require_once '../php/requirements.php';

function main(): void {
    // sets the email and password to temp cookies
    $_COOKIE['tmp_email'] = $_POST['email'];
    $_COOKIE['tmp_password'] = $_POST['password'];

    // checks an email has been given
    if (!isset($_POST['email'])) {
        error_and_reroute(
            error_message: 'no email provided',
            // debug: true,
        );
    }

    // checks if a password has been given
    if (!isset($_POST['password'])) {
        error_and_reroute(
            error_message: 'no password provided',
            // debug: true,
        );
    }

    // makes a connection
    $connection = get_database_connection();

    $query = "SELECT * FROM users WHERE email=\"" . $connection->escape_string($_POST['email']) ."\" and email=\"". $connection->escape_string(hash_password(password: $_POST['password'])) . "\";";

    $result = $connection->query($query);

    // if details are incorrect
    if ($result->num_rows == 0) {
        $query = "SELECT * FROM users WHERE email=\"" . $connection->escape_string($_POST["email"]) ."\";";
        $result = $connection->query(query: $query);

        // if the email is correct but not password
        if ($result->num_rows == 1) {
            error_and_reroute(
                error_message: 'incorrect password'
            );
        }
        // else
        error_and_reroute(
           error_message: 'email not in use'
        );
    }

    
}
main();
