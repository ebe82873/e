<?php

require_once '../php/requirements.php';

function main(): void {
        set_cookie('email', $_POST['email']);
        set_cookie('username', $_POST['username']);
        set_cookie('password', $_POST['password']);
        set_cookie('password-conf', $_POST['password-conf']);

        if (!isset($_POST['email'])) {
                error_and_reroute('no email provided');
        }
        if (!isset($_POST['username'])) {
                error_and_reroute('no email provided');
        }
        if (!isset($_POST['password'])) {
                error_and_reroute('no password provided');
        }
        if (!isset($_POST['password-conf'])) {
                error_and_reroute('no password confirmation provided');
        }
        if ($_POST['password'] != $_POST['password-conf']) {
                error_and_reroute('password do not match');
        }

        $connection = get_database_connection();

        $query = "SELECT * FROM users where email=\"" . $connection->escape_string($_POST["email"]) ."\";";

        if ($connection->query($query)->num_rows > 0) {
                error_and_reroute('email \'' . $_POST['email'] . '\' already in use');
        }

        if ($_POST['img-url']) {
                // create a query for the user with a profile picture to be uploaded into the table
                $query = "INSERT INTO users (email, username, password, img_url) VALUES (\"" . $connection->escape_string($_POST["email"]) ."\", \"". $connection->escape_string($_POST["username"]) ."\", \"". $connection->escape_string(hash_password($_POST['password'])) . "\", \"" . $_POST['img-url'] . "\");";
        }
        else {
                // creates a query for the used without a profile picture to be uploaded into the table
                $query = "INSERT INTO users (email, username, password) VALUES (\"" . $connection->escape_string($_POST["email"]) ."\", \"". $connection->escape_string($_POST["username"]) ."\", \"". $connection->escape_string(hash_password($_POST['password'])) . "\");";
        }

        $connection->query($query);

        header('location: ../(login)/');
}

main();