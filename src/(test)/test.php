<?php


$test_string = 'ip21 4ax';
$pattern = '/([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9][A-Za-z]?))))\s?[0-9][A-Za-z]{2})/';

var_dump($test_string);
echo '<br>';
var_dump($pattern);
echo '<br>';
echo 'pass: ' . preg_match($pattern, $test_string) .'<br>';





