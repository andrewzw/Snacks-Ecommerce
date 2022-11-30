<?php
// To Connect:  localhost/creatdb.php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";


// Create connection
$conn = new mysqli($host , $dbUsername, $dbPassword);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE papapotato";

if ($conn->query($sql) === TRUE) {
  echo "Database papapotato created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>