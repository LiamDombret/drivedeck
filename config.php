<?php
$host = "ID211210_dd.db.webhosting.be";
$userName = "ID211210_dd";
$password = "drivedeckard2049";
$dbName = "ID211210_dd";

$conn = new mysqli($host, $userName, $password, $dbName);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
