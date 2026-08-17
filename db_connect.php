<?php
$servername = "localhost";
$username   = "root";       // XAMPP default
$password   = "";           // XAMPP default
$dbname     = "portfolio_db"; // Make sure this database exists in phpMyAdmin

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
