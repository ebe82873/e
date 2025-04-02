<?php

require_once '../php/requirements.php';

function main(): void {
        // destroys the user from cookie, logging them out
        delete_cookie('user');
        header(header: 'location: ../(home)/');
}

main();