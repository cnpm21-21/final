<?php 
function connection()
{
    $host = 'localhost';
    $root = 'root';
    $password = '';
    $db = 'fitness_db';

    $conn = new mysqli($host, $root, $password, $db);
    if ($conn->connect_error) {
        die('Connect error: ' . $conn->connect_error);
    }
    return $conn;
}
?>