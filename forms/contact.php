<?php
  $con = mysqli_connect('localhost', 'root', '');
  if(!$con) {
    echo "Not Connected to Server";
  }

  if(!mysqli_select_db($con, 'webredex')){
    echo "Database is Not Connected";
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO wrcontact(name, email, subject, message) 
  VALUES('$name', '$email', '$subject', '$message')";
  if(!mysqli_query($con, $sql)){
    echo "Data Not Inserted";
  }
  else {
    echo "Your message has been sent Thank you!";
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  //$contact->smtp = array(
  //  'host' => 'example.com',
    //'username' => 'example',
    //'password' => 'pass',
    //'port' => '587'
  //);
  */

  
  
?>
