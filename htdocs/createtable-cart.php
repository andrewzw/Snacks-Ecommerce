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

  $sql = "CREATE TABLE papapotato.cart ( 
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    BBQThickCut INT(2), 
    DoubleCheesyThickCut INT(2),
    JuicyTomatoThickCut INT(2),
    OriginalThickCut INT(2),
    SeaSaltThickCut INT(2),
    SpicyThickCut INT(2),
    BBQWavy INT(2),
    CrunchySeaweedWavy INT(2),
    FreshVeggieWavy INT(2),
    JuicyTomatoWavy INT(2),
    OriginalWavy INT(2),
    SpicyWavy INT(2),
    TotalAmount_RM INT(5)
    )";

  if ($conn->query($sql) === TRUE) {
    echo "Table 'cart' created successfully";
  }

  else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>