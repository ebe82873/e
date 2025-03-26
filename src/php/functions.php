<?php

function hash_password($password): string {
    return hash(algo: 'sha256', data: $password);
}