<?php 
require_once("./dashboard/connect_db.php");

$conn = connection();
$sql = "SELECT admin_picture FROM admin";
$res = $conn->query($sql);
print_r($res->fetch_assoc());
?>