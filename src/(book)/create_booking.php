<?php

require_once '../php/requirements.php';

function main(): void {
    if (!is_user_logged_in()) {
        error_and_reroute(error_message: 'please log in to be able to create bookings', path: '../(login)');
    }
    
    $date = $_POST['date'];
    $email = $_POST['email'];

    $address_line_1 = $_POST['address-line-1'];
    $address_line_2 = $_POST['address-line-2'];
    $address_line_county = $_POST['address-line-county'];
    $ip_address = $_POST['ip-address'];

    $solar_panel = ['on' => true, 'off' => false][$_POST['solar-panel'] ?? 'off'];
    $ev_charging = ['' => true, 'off' => false][$_POST['ev-charging'] ?? 'off'];
    $smart_home = ['' => true, 'off' => false][$_POST['smart-home'] ?? 'off'];

    set_cookie('tmp_date', $date);
    set_cookie('tmp_email', $email);

    set_cookie('tmp_address-line-1', $address_line_1);
    set_cookie('tmp_address-line-2', $address_line_2);
    set_cookie('tmp_address-line-county', $address_line_county);
    set_cookie('tmp_ip-address', $ip_address);

    set_cookie('tmp_solar-panel', $solar_panel);
    set_cookie('tmp_ev-charging', $ev_charging);
    set_cookie('tmp_smart-home', $smart_home);

    // if the user has not selected a valid at least one of the checkboxes
    if (!$solar_panel && !$ev_charging && !$smart_home) {
        error_and_reroute('Please select at least one service');
    }

    $user = fetch_cookie('user');
    
    $connection = get_database_connection();

//     CREATE TABLE bookings (
//         ID int auto_increment primary key,
//         user_id int not null,
//         solar boolean not null,
//         ev_charger boolean not null,
//         smart_home boolean not null,
//         date text not null,
//         name text not null,
//         foreign key (user_id) references users(ID)
// );

    
    $query = "INSERT INTO bookings (user_id, date, solar, ev_charger, smart_home) VALUES (\"" . $connection->escape_string($user['id']) . "\", \"" . $connection->escape_string($date) . "\", ";

    if ($solar_panel) {
        $query .= "true, ";
    } else {
        $query .= "false, ";
    }
    if ($ev_charging) {
        $query .= "true, ";
    } else {
        $query .= "false, ";
    }
    if ($smart_home) {
        $query .= "true";
    } else {
        $query .= "false";
    }

    $query .= ");";

    $connection->query($query);

    header("location: ../(consultation)/");
}

main();
