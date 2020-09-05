<?php

$db_user = 'posthub';
$db_password = 'dTmd3gH!';
$db_host = 'localhost';
$db_name = 'posthub';

$dbc = @mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_set_charset($dbc,"utf8mb4");

if (!$dbc) {
    die('Verbindung zur Datenbank fehlgeschlagen: '.mysqli_connect_error());
}