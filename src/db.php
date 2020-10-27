<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "test");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Apologies, the page has encountered a problem. \n";
    echo 'Error: ' . $mysqli->connect_error . '\n';
    exit();
}