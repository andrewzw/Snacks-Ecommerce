<?php
  //Contact
  $user_name = $_POST['user_name'];
  $phone_num = $_POST['phone_num'];
  $email = $_POST['email'];
  $user_message = $_POST['user_message'];
  $checkbox = $_POST['checkbox'];

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
    if ($user_name ==  "" || $user_name ==  " " ) {
      echo "<b>Name Error:</b>";
      echo "<br>";
      echo "Name is empty";
      echo "<br>";
    }   

    else if(!preg_match("/^[a-zA-Z\. ]*$/", $user_name)) {  
      //else if(!ctype_alpha ($user_name)) { //validate the user input is a string or any character or not
      echo "<b>Name Error:</b>";
      echo "<br>";
      echo "Only alphabets and whitespace are allowed for Name.";
      echo "<br>";
      echo "English Characters Only.";
      echo "<br>";
    }

    else if(strlen($user_name) > 50 ) {  
      echo "<b>Name Error:</b>";
      echo "<br>";
      echo "First Name is limited to 50Characters.";
      echo "<br>";
    }

    else{
      $ValidateInsert += 1;
    }
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

  //Validate Message
  if ($user_message ==  "" || $user_message ==  " " ) {
    echo "<b>Message Error:</b>";
    echo "<br>";
    echo "Message Box is empty";
    echo "<br>";
  }

  else if(strlen($user_message) > 255 ) {  
    echo "<b>Message Error:</b>";
    echo "<br>";
    echo "Message Box is limited to 255Characters.";
    echo "<br>";
  }

  else{
    $ValidateInsert += 1;
  }

  if ($ValidateInsert == 4){ // when all the fields are correct then only the data will be inserted
    $sql = "INSERT INTO contactus (user_name, phone_num, email, user_message)
    VALUES ('$user_name', '$phone_num', '$email', '$user_message')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Thank you for filling up the form. We will try our best to get back to you as soon as possible.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();

?>
  