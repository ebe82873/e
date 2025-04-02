<?php

require_once '../php/requirements.php';

function main(): void {
        set_cookie('tmp_email', $_POST['email']);
        set_cookie('tmp_password', $_POST['password']);
        set_cookie('tmp_password_conf', $_POST['password-conf']);
        set_cookie('tmp_username', $_POST['username']);

        if (!isset($_POST['email'])) {
                error_and_reroute('email not given');
        }
        
        if (!isset($_POST['username'])) {
                error_and_reroute('name not given');
        }
        
        if (!isset($_POST['password'])) {
                error_and_reroute('password not given');
        }

        if ($_POST['password'] != $_POST['password-conf']) {
                error_and_reroute('passwords do not match');
        }

        if (!is_user_logged_in()) {
                error_and_reroute('please log in', '../(login)/');
        }

        $connection = get_database_connection();

        $user_id = fetch_cookie('user')['id'];
        
        $query = "UPDATE users SET username=\"" . $connection->escape_string($_POST["username"]) ."\", email=\"". $connection->escape_string($_POST['email']) . "\", password=\"" . $connection->escape_string(hash_password(password: $_POST["password"])) . "\"";
        
        if (isset($_POST['img_url'])) {
                $query = $query . ", img_url=\"" . $connection->escape_string($_POST["img_url"]) . "\"";
        }

        $query = $query . "WHERE ID=\"" . $user_id . "\"";

        var_dump($query);

        $connection->query($query); 

        header("location: ./");
}

main();
