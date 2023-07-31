<?php
require_once 'functions.php';

$name = 'John';
$age = 25;

$greeting = get_greeting($name);
$next_age = get_next_age($age);

echo $greeting . ' You will turn ' . $next_age . ' next year.';
?>
