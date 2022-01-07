<?php 
function connection()
{
    $host = 'localhost';
    $root = 'root';
    $password = '';
    $db = 'fitness_club';

    $conn = new mysqli($host, $root, $password, $db);
    if ($conn->connect_error) {
        die('Connect error: ' . $conn->connect_error);
    }
    return $conn;
}
?>