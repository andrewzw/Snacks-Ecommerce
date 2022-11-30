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

  $sql = "CREATE TABLE papapotato.contactus ( 
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    user_name VARCHAR(50) NOT NULL , 
    phone_num INT(8) NOT NULL , 
    email VARCHAR(30) NOT NULL ,  
    user_message VARCHAR(200) NOT NULL
    )";

  if ($conn->query($sql) === TRUE) {
    echo "Table 'contactus' created successfully";
  }

  else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>