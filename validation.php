<?php
$message = '';
    if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password']
    $ConfirmPassword = $_POST['confirmpassword']
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    if (empty($firstName) || empty($lastName) ||  empty($email) || empty($password) || empty($ConfirmPassword) ||
    empty($phonenumber) || empty($gender) ||empty($country)) {
    $message = 'All fields are required';
        }       
    }
    echo $message;
    $message = '';

    if (strlen($firstName) < 3 || strlen($firstName) > 20) {
        $message .= '<p class="error">Firstname must be between 3 and 20 characters</p>';
        }

    if (strlen($lastName) < 3 || strlen($lastName) > 20) {
        $message .= '<p class="error">lastname must be between 3 and 20 characters</p>';
        }

    if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){
        echo "<center>Invalid email<center>";
    }else{
        echo"<center>Valid email</center>";
        
    if (!is_numeric($phonenumber)) {
        $message .= '<p class="error">Phone number should be numeric</p>';
    }
    if (strlen($phonenumber) != 11) {
        $message .= '<p class="error">Phone number should be 11 digits long</p>'
    
    if(!isset($gender)){
        $error = $error . "empty gender <br/>";
    }else{
        $gender = $_POST["gender"];
    if($gender == "male"){
        $Mchecked = "checked";
    }    
    else if($_POST($gender == "female"){
        $Fchecked = "checked";
        }
    }
    if(isset($_REQUEST['select_box']) && $_REQUEST['select_box'] =='0'){
        echo 'Please select a country.';
    }
    if (empty($message)) {
        $message = '<p class="success">All inputs are valid, thank you</p>';
        }
?>