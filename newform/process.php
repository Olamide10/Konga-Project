<?php
    $firstname = $_POST['firstname'];
    $Lastname = $_POST['Lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST ['confirmpassword'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country);
    saveToDatabase($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country);
    header('Location:success.html');

    function saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country){
        $fileHandler = fopen('record.txt', 'a');
        $string =$firstname .','. $Lastname .','. $email .','. $password .','. $confirmpassword .','. $phonenumber .','. $gender .','. $country;
        fwrite($fileHandler, $string);
        fclose($fileHandler);
    }
    function saveToDatabase($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country){
        $serverName = "localhost";
        $database = "registration";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($serverName, $username, $password, $database);
        if(!$conn){
            die("connection failed:" .mysqli_connect());
        }
        $sql = "INSERT INTO users (firstname, Lastname, email, password, confirmpassword, phonenumber, gender, country, created_at)
            VALUES ('', '$firstname', '$Lastname', '$email', '$password', '$confirmpassword', '$phonenumber', '$gender', '$country')";
        $result = mysqli_query ($conn, $sql);

        if (!$result){
            die("Error:". $sql. "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    }
    ?>

    
    