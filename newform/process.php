<?php
    $firstname = $_POST['firstname'];
    $Lastname = $_POST['Lastname'];
    $email = $_POST['email'];
    $password = $_POST['password_user'];
    $confirmpassword = $_POST ['confirmpassword'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $date = $_POST['created_at'];
    saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country,$date);
    saveToDatabase($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country,$date);
    header('Location:success.html');

    function saveToFile($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country,$date){
        $fileHandler = fopen('record.txt', 'a');
        $string =$firstname .','. $Lastname .','. $email .','. $password .','. $confirmpassword .','. $phonenumber .','. $gender .','. $country.','.$date;
        fwrite($fileHandler, $string);
        fclose($fileHandler);
    }
    function saveToDatabase($firstname, $Lastname, $email, $password, $confirmpassword, $phonenumber, $gender, $country,$date){
        $serverName = "localhost";
        $database = "registration";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($serverName, $username, $password, $database);
        if(!$conn){
            die("connection failed:" .mysqli_connect());
        }
        $sql = "INSERT INTO users (id,firstname, Lastname, email, password_user, confirmpassword, phonenumber, gender, country, created_at)
            VALUES ('', '$firstname', '$Lastname', '$email', '$password', '$confirmpassword', '$phonenumber', '$gender', '$country','$date')";
        $result = mysqli_query ($conn, $sql);

        if (!$result){
            die("Error:". $sql. "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    }
    ?>

    
    