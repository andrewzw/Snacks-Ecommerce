<?php
// To Connect:  localhost/createtable.php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "papapotato";


// Create connection
$conn = new mysqli($host , $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE papapotato.checkout ( 
  id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  user_Fname VARCHAR(30) NOT NULL , 
  user_Lname VARCHAR(20) NOT NULL , 
  phone_num INT(11) NOT NULL , 
  email VARCHAR(30) NOT NULL , 
  unit_num INT(2) NOT NULL , 
  street1 VARCHAR(30) NOT NULL , 
  street2 VARCHAR(30) NOT NULL , 
  postcode INT(5) NOT NULL , 
  state VARCHAR(15) NOT NULL ,  
  shipping CHAR(8) NOT NULL , 
  payment VARCHAR(20) NOT NULL , 
  TNGphone_num INT(11),
  TNG_code INT(6),
  cardname VARCHAR(30), 
  card_num INT(17), 
  card VARCHAR(20), 
  expiry_month INT(2), 
  expiry_year INT(2), 
  cvv INT(3)
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table 'checkout' created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>