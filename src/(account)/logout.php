<?php

require_once '../php/requirements.php';

function main(): void {
        delete_cookie('user');
        header(header: 'location: ../(home)/');
}

main();