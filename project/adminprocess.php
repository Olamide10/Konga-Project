<?php

    $serverName = "localhost";
    $database = "mohfoods";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($serverName, $username, $password, $database);
    if(!$conn){
    die("connection failed:" .mysqli_connect());
    }
        $username=mysqli_real_escape_string($database,$_POST['admin_username']);
        $password=md5($_POST['password_admin']); 
        $sql="SELECT * FROM `admin` WHERE username='$username' AND password='$password'"; 
        $query=mysqli_query($db,$sql);
        if($query){
        //successful login 
        } else{
            // unsuccessful login
        } 
?> 