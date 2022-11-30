<?php
  //Contact
  $BBQThickCut = $_POST['BBQThickCut'];
  $DoubleCheesyThickCut = $_POST['DoubleCheesyThickCut'];
  $JuicyTomatoThickCut = $_POST['JuicyTomatoThickCut'];
  $OriginalThickCut = $_POST['OriginalThickCut'];
  $SeaSaltThickCut = $_POST['SeaSaltThickCut'];
  $SpicyThickCut = $_POST['SpicyThickCut'];
  $BBQWavy = $_POST['BBQWavy'];
  $CrunchySeaweedWavy = $_POST['CrunchySeaweedWavy'];
  $FreshVeggieWavy = $_POST['FreshVeggieWavy'];
  $JuicyTomatoWavy = $_POST['JuicyTomatoWavy'];
  $OriginalWavy = $_POST['OriginalWavy'];
  $SpicyWavy = $_POST['SpicyWavy'];
  $TotalAmount_RM = $_POST['TotalAmount_RM'];

  //Login 
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

  if($BBQThickCut < 0 || $DoubleCheesyThickCut < 0 || $JuicyTomatoThickCut < 0 ||
  $OriginalThickCut < 0 || $SeaSaltThickCut < 0 || $SpicyThickCut < 0 || $BBQWavy < 0 || $CrunchySeaweedWavy < 0 ||
  $FreshVeggieWavy < 0 || $JuicyTomatoWavy < 0 || $OriginalWavy < 0 || $SpicyWavy < 0){
    echo "<b>Quantity Error:</b>";
    echo "<br>";
    echo "Product quantity cannot be a negative number";
    echo "<br>";
    echo "Please return back and try again.";
    echo "<br>";
  }

  else if ($BBQThickCut > 60 || $DoubleCheesyThickCut > 60 || $JuicyTomatoThickCut > 60 ||
  $OriginalThickCut > 60 || $SeaSaltThickCut > 60 || $SpicyThickCut > 60 || $BBQWavy > 60 || $CrunchySeaweedWavy > 60 ||
  $FreshVeggieWavy > 60 || $JuicyTomatoWavy > 60 || $OriginalWavy > 60 || $SpicyWavy > 60){
    echo "<b>Exceeded maximum amount of quantity:</b>";
    echo "<br>";
    echo "The maximum amount of each product is 60 per checkout.";
    echo "<br>";
    echo "Please return back and try again.";
    echo "<br>";
  }

  else if ($BBQThickCut == 0 && $DoubleCheesyThickCut == 0 && $JuicyTomatoThickCut == 0 &&
  $OriginalThickCut == 0 && $SeaSaltThickCut == 0 && $SpicyThickCut == 0 && $BBQWavy == 0 && $CrunchySeaweedWavy == 0 &&
  $FreshVeggieWavy == 0 && $JuicyTomatoWavy == 0 && $OriginalWavy == 0 && $SpicyWavy == 0){
    echo "<b>Empty cart:</b>";
    echo "<br>";
    echo "You must have at least 1 product in your cart to checkout.";
    echo "<br>";
    echo "Please return back and try again.";
    echo "<br>";
  }

  else if($TotalAmount_RM == 0){
    echo "<b>Empty Total Amount:</b>";
    echo "<br>";
    echo "You must have at least 1 product in your cart to checkout.";
    echo "<br>";
    echo "If there's already something in your cart, please click the 'Total Amount(RM)' before checking out";
    echo "<br>";
    echo "Please return back and try again.";
    echo "<br>";
  }

  else if($TotalAmount_RM < 0){
    echo "<b>Invalid Total Amount:</b>";
    echo "<br>";
    echo "Total Amount must be a positive number";
    echo "<br>";
    echo "Please return back and try again.";
    echo "<br>";
  }

  else{
    $sql = "INSERT INTO cart (BBQThickCut, DoubleCheesyThickCut, JuicyTomatoThickCut, OriginalThickCut, SeaSaltThickCut, SpicyThickCut,
    BBQWavy, CrunchySeaweedWavy, FreshVeggieWavy, JuicyTomatoWavy, OriginalWavy, SpicyWavy, TotalAmount_RM)
    VALUES ('$BBQThickCut', ' $DoubleCheesyThickCut', '$JuicyTomatoThickCut', '$OriginalThickCut',
    '$SeaSaltThickCut', '$SpicyThickCut', '$BBQWavy', '$CrunchySeaweedWavy', '$FreshVeggieWavy',
    '$JuicyTomatoWavy', '$OriginalWavy', '$SpicyWavy', '$TotalAmount_RM')";
    
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      /*echo "New record created successfully. Last inserted ID is: " . $last_id;*/
      echo"<script>
        window.location.href = 'http://localhost/checkout.html';
        alert('Product(s) successfully added into the cart! Please proceed with payment now.');
      </script>";
    } 
    
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>