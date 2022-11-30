<?php
error_reporting(0);

//Contact
$user_Fname = $_POST['user_Fname'];
$user_Lname = $_POST['user_Lname'];

$phone_num = $_POST['phone_num'];

$email = $_POST['email'];

$unit_num = $_POST['unit_num'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$postcode = $_POST['postcode'];
$state = $_POST['state'];

$shipping = $_POST['shipping'];
$payment = $_POST['payment'];
$TNGphone_num = $_POST['TNGphone_num'];
$TNG_code = $_POST['TNG_code'];

$cardname = $_POST['cardname'];
$card_num = $_POST['card_num'];
$card = $_POST['card'];
$expiry_month = $_POST['expiry_month'];
$expiry_year = $_POST['expiry_year'];
$cvv = $_POST['cvv'];

//Function
function count_digit($num) { //counts number of digits in phone number
  return strlen($num);
}

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

//Set variable $ValidateInsert = False; 
$ValidateInsert = 0;
$validate = 1;

if($validate == 1){ //start if($validate == 1){
//Validate Name 
  if ($user_Fname ==  "" || $user_Lname ==  "" || $user_Lname ==  " " || $user_Fname ==  " " ) {
    echo "<b>Name Error:</b>";
    echo "<br>";
    echo "Fisrt Name and/or Last Name is empty";
    echo "<br>";
  }   
  else if(!preg_match("/^[a-zA-Z\. ]*$/", $user_Fname)) {  

    echo "<b>Name Error:</b>";
    echo "<br>";
    echo "Only alphabets and whitespace are allowed for First name.";
    echo "<br>";
    echo "English Characters Only.";
    echo "<br>";
  }
  else if(!preg_match("/^[a-zA-Z\. ]*$/", $user_Lname)) { 
  
    echo "<b>Name Error:</b>";
    echo "<br>";
    echo "Only alphabets and whitespace are allowed for Last name.";
    echo "<br>";
    echo "English Characters Only.";
    echo "<br>";
  }
  else if(strlen($user_Fname) >= 30 ) {  
    echo "<b>Name Error:</b>";
    echo "<br>";
    echo "First Name is limited to 30Characters.";
    echo "<br>";
  }
  else if(strlen($user_Lname) >= 20 ) {  
    echo "<b>Name Error:</b>";
    echo "<br>";
    echo "Last Name is limited to 20Characters.";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }

//Validate Phone Number

  if ($phone_num ==  "") {
    echo "<b>Phone number Error:</b>";
    echo "<br>";
    echo "Phone number is empty";
    echo "<br>";
  }
  else if(count_digit($phone_num) > 10 || count_digit($phone_num) < 9){
    echo "<b>Phone number Error:</b>";
    echo "<br>";
    echo "$phone_num is not within the legal range(min= 9digits max= 10digits)";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }
  
//Validate Email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove illegal characters

  if ($email ==  "") {
    echo "<b>Email Error:</b>";
    echo "<br>";
    echo "Email is empty";
    echo "<br>";
  }
  else if((filter_var($email, FILTER_VALIDATE_EMAIL)) == false) {  
    echo "<b>Email Error:</b>";
    echo "<br>";
    echo "$email is not a valid email address";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }

//Validate Unit No
  if ($unit_num ==  "") {
    echo "<b>Unit number Error:</b>";
    echo "<br>";
    echo "Unit number is empty";
    echo "<br>";
  }
  else if(!preg_match ("/^[0-9]*$/", $unit_num) ) {
    echo ("<b>Unit number Error:</b>");
    echo "<br>";
    echo ("Unit number only accepts integers");
    echo "<br>";
  }
  else if(count_digit($unit_num) > 4 ){
    echo "<b>Unit number Error:</b>";
    echo "<br>";
    echo "$unit_num is not within the legal range(max= 4digits)";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }

//Validate Street 
  if ($street1 ==  "" || $street2 ==  "") {
    echo "<b>Street Error:</b>";
    echo "<br>";
    echo "Street1 and/or Street2 is empty";
    echo "<br>";
  } 
  else if(!preg_match ("/^[A-Za-z0-9'\.\-\s\,\/]*$/", $street1) ) {  
    echo "<b>Street Error:</b>";
    echo "<br>";
    echo "Only Characters such as['A-Z', 'a-z', '0-9', '.', '-', '/'] are allowed for Street1.";
    echo "<br>";
    echo "English Characters Only.";
    echo "<br>";
  }
  else if(!preg_match ("/^[A-Za-z0-9'\.\-\s\,\/]*$/", $street2) ) {  
    echo "<b>Street Error:</b>";
    echo "<br>";
    echo "Only Characters such as['A-Z', 'a-z', '0-9', '.', '-', '/'] are allowed for Street2.";
    echo "<br>";
    echo "English Characters Only.";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }
           
//Validate Postcode
  if ($postcode ==  "") {
    echo "<b>Postcode Error:</b>";
    echo "<br>";
    echo "Postcode is empty";
    echo "<br>";
  }
  else if(!preg_match ("/^[0-9]*$/", $postcode) ) {
    echo ("<b>Postcode Error:</b>");
    echo "<br>";
    echo ("Postcode only accepts integers");
    echo "<br>";
  }
  else if(count_digit($postcode) != 5){
    echo "<b>Postcode Error:</b>";
    echo "<br>";
    echo "$postcode is not a valid Postcode in Malaysia(5digits)";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }

//Validate State
  if ($state ==  "") {
    echo "<b>State Error:</b>";
    echo "<br>";
    echo "Please choose a State";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }
//Validate Shipping Method
  if ($shipping ==  "") {
    echo "<b>Shipping Method Error:</b>";
    echo "<br>";
    echo "Please choose a Shipping Method";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }
//Validate Payment Method
  if ($payment ==  "") {
    echo "<b>Payment Method Error:</b>";
    echo "<br>";
    echo "Please choose a Payment Method";
    echo "<br>";
  }
  else{
    $ValidateInsert += 1;
  }
//Validate TNG Phone Number
  $TNGphone_num = preg_replace('/\s+/', '', $TNGphone_num); //remove all spacing tabs and line ends  \s+ will match one or more whitespace characters. 
  if($payment ==  "TNG eWallet"){
    if ($TNGphone_num ==  " " || $TNGphone_num ==  "") {
      echo "<b>Phone number Error:</b>";
      echo "<br>";
      echo "Phone number is empty";
      echo "<br>";
    }
    else if(!preg_match ("/^[0-9]/", $TNGphone_num) ) {
      echo ("<b>Phone number Error:</b>");
      echo "<br>";
      echo ("Phone number only accepts integers");
      echo "<br>";
    }
    else if(count_digit($TNGphone_num) > 10 || count_digit($TNGphone_num) < 9){
      echo "<b>Phone number Error:</b>";
      echo "<br>";
      echo "$TNGphone_num is not within the legal range(min= 9digits max= 10digits)";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }
  
//Validate TNG 6 Digits Code
  if($payment ==  "TNG eWallet"){
    if ($TNG_code ==  " " || $TNG_code ==  "" ) {
      echo "<b>TNG Code Error:</b>";
      echo "<br>";
      echo "TNG Code is empty";
      echo "<br>";
    }
    else if(!preg_match ("/^[0-9]*$/", $TNG_code) ) {
      echo ("<b>TNG Code Error:</b>");
      echo "<br>";
      echo ("TNG Code only accepts integers");
      echo "<br>";
    }
    else if(count_digit($TNG_code) != 6 ){
      echo "<b>TNG Code Error:</b>";
      echo "<br>";
      echo "$TNG_code is not valid(6digits)";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }

//Validate Card Name 
  if($payment ==  "Debit / Credit Card"){
    if ($cardname ==  "" || $cardname ==  " ") {
      echo "<b>Card Name Error:</b>";
      echo "<br>";
      echo "Card Name is empty";
      echo "<br>";
    }   
    else if(!preg_match ("/^[a-zA-Z\. ]*$/", $cardname) ) {  
      echo "<b>Card Name Error:</b>";
      echo "<br>";
      echo "Only alphabets and whitespace are allowed for Card name.";
      echo "<br>";
      echo "English Characters Only.";
      echo "<br>";
    }
    else if(strlen($cardname) > 50 ) {  
      echo "<b>Card Name Error:</b>";
      echo "<br>";
      echo "Card Name is limited to 50Characters.";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }
//Validate Card Num 
  if($payment ==  "Debit / Credit Card"){
    $card_num = preg_replace('/\s+/', '', $card_num); //remove all spacing tabs and line ends  \s+ will match one or more whitespace characters.

    if ($card_num ==  "" || $card_num ==  " ") {
      echo "<b>Card number Error:</b>";
      echo "<br>";
      echo "Card number is empty";
      echo "<br>";
    }
    else if(count_digit($card_num) != 16){
      echo "<b>Card number Error:</b>";
      echo "<br>";
      echo "$card_num is not a valid card number(must be 16 digits)";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }
//Validate Card Type 
  if($payment ==  "Debit / Credit Card"){
    if ($card ==  "" || $card ==  " ") {
      echo "<b>Card Type Error:</b>";
      echo "<br>";
      echo "Please choose a Card Type";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }
//Validate Expiry Date 
  if($payment ==  "Debit / Credit Card"){
    if ($expiry_month ==  "" || $expiry_month ==  " ") {
      echo "<b>Expiry Month Error:</b>";
      echo "<br>";
      echo "Please choose a Expiry Month";
      echo "<br>";
    }
    else if($expiry_year ==  "" || $expiry_year ==  " "){
      echo "<b>Expiry Year Error:</b>";
      echo "<br>";
      echo "Please choose a Expiry Year";
      echo "<br>";;
    }
    else if($expiry_month <=  date("m") and $expiry_year <= date("y")){
      echo "<b>Expiry Date Error:</b>";
      echo "<br>";
      echo "Card Expired";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }  
//Validate Card CVV
  if($payment ==  "Debit / Credit Card"){
    if ($cvv ==  "" || $cvv ==  " ") {
      echo "<b>Card CVV Error:</b>";
      echo "<br>";
      echo "Card CVV is empty";
      echo "<br>";
    }
    else if(count_digit($cvv) != 3){
      echo "<b>Card CVV Error:</b>";
      echo "<br>";
      echo "$cvv is not a valid Card CVV(must be 3 digits)";
      echo "<br>";
    }
    else{
      $ValidateInsert += 1;
    }
  }


//echo "Counter: $ValidateInsert"; // count $ValidateInsert to check if the code is running as it should
echo "<br>";
} //end if statement ($validate == 1)


if($payment ==  "TNG eWallet"){
  if ($ValidateInsert == 11){ // when all the fields are correct then only the data will be inserted

    $sql = "INSERT INTO checkout (user_Fname, user_Lname, phone_num, email, unit_num, street1, street2, postcode, state, shipping, payment, TNGphone_num, TNG_code)
    VALUES ('$user_Fname', '$user_Lname', '$phone_num', '$email', '$unit_num', '$street1', '$street2', '$postcode', '$state', '$shipping', '$payment', '$TNGphone_num', '$TNG_code')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Your order has been received by us. We will send you your tracking number via email wihtin 3 operation day. ";
      echo "Thank you for your support. Have a great day!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
else if($payment ==  "Debit / Credit Card"){
  if ($ValidateInsert == 14){ // when all the fields are correct then only the data will be inserted

    $sql = "INSERT INTO checkout (user_Fname, user_Lname, phone_num, email, unit_num, street1, street2, postcode, state, shipping, payment, cardname, card_num, card, expiry_month, expiry_year, cvv)
    VALUES ('$user_Fname', '$user_Lname', '$phone_num', '$email', '$unit_num', '$street1', '$street2', '$postcode', '$state', '$shipping', '$payment', '$cardname', '$card_num', '$card', '$expiry_month', '$expiry_year', '$cvv')";
    if ($conn->query($sql) === TRUE) {
      echo "Your order has been received by us. We will send you your tracking number via email wihtin 3 operation day. ";
      echo "Thank you for your support. Have a great day!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
else if($payment ==  "Cash On Delivery"){
  if ($ValidateInsert == 9){ // when all the fields are correct then only the data will be inserted

    $sql = "INSERT INTO checkout (user_Fname, user_Lname, phone_num, email, unit_num, street1, street2, postcode, state, shipping, payment)
    VALUES ('$user_Fname', '$user_Lname', '$phone_num', '$email', '$unit_num', '$street1', '$street2', '$postcode', '$state', '$shipping', '$payment')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Your order has been received by us. We will send you your tracking number via email wihtin 3 operation days. ";
      echo "Thank you for your support. Have a great day!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}


$conn->close();
?>

