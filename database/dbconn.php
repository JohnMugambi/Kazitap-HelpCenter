<?php

$host = 'localhost';
$user = 'mugambi';
$password = 'mugambi';
$db_name = 'kazitaphelpcenter';



$conn = new MySQLi ($host, $user, $password, $db_name);

if ($conn->connect_error){
    die('Database connection error:');
}

