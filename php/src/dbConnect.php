<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$db = "db";

$db = new mysqli($host, $user, $pass, $db);

function CheckConnection($connection, $silent = true) {
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else if(!$silent) {
        echo "Connected to MySQL server successfully!";
    }
}