<?php
    $firstname = $_POST['firstname'];
    $Lastname = $_POST['Lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST ['confirmpassword'];
    $phonenumber = $_POST['phonenumber'];
    $female = $_POST['female'];
    $male = $_POST['male'];
    $country = $_POST['country'];
    saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $female, $male, $country );
    header('Location:success.html');


    function saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $female, $male, $country) {
    $fileHandler = fopen('record.txt', 'a');
    $string = $firstname . ',' . $Lastname . ',' . $email . ',' . $password . ',' . $confirmpassword . ',' . $phonenumber . ',' . $female . ',' . $male . ',' . $country ."\n";
    fwrite($fileHandler, $string);
    fclose($fileHandler);
    }