<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['Lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['gender'];
$country = $_POST['country'];

function saveToFile($firstname, $lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country){
  $fileHandler = fopen('record.txt','a');
  $string = $firstname .',' . $lastname .',' . $email .',' . $password .',' . $confirmpassword .',' . $phonenumber .',' . $gender .',' . $country ."\n";
  fwrite($fileHandler, $string);
  fclose($fileHandler);
}
​
function saveToDatabase($firstname, $lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country){
  $serverName = "localhost";
  $database = "registration";
  $username = "root";
  $password = "";
​
  $conn = mysqli_connect($serverName, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
 
  $sql = "REPLACE INTO `users`
    VALUES ('','$firstname', '$lastname', '$email', '$password', '$confirmpassword', '$phonenumber', '$gender', '$country', NOW())";
  $result = mysqli_query ($conn, $sql);
​
  if(!$result){
    die("Error: " . $sql. "<br>" . mysqli_error($conn));
  }
  mysqli_close($conn);
}

saveToFile($firstname, $lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country);
saveToDatabase($firstname, $lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country);
header('Location:success.html');
​
?> 






