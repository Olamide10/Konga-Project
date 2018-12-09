<?php
    $menu = $_POST['menu'];
    $username = $_POST['customer_name'];
    $quantity = $_POST['quantity_item'];
    $address = $_POST ['address_cust'];
    $phonenumber = $_POST ['phone_num'];
    $total = $_POST ['total_item'];
    saveToFile($menu, $username, $quantity, $address);
    saveToDatabase($menu, $username, $quantity, $address);
    header('Location:success.html');

    function saveToFile($menu, $username, $quantity, $address,$phonenumber,$total ){
        $fileHandler = fopen('record.txt', 'a');
        $string =$menu .','. $username .','. $quantity .','. $address.','.$phonenumber.','.$total;
        fwrite($fileHandler, $string);
        fclose($fileHandler);
    }
    function saveToDatabase($menu, $username, $quantity, $address,$phonenumber,$total){
        $serverName = "localhost";
        $database = "mohfoods";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($serverName, $username, $password, $database);
        if(!$conn){
            die("connection failed:" .mysqli_connect());
        }
        $sql = "INSERT INTO order (menu, customer_name, quantity_item, address_cust,'phone_num', 'total_item',created_at )
            VALUES ('', '$menu', '$username', '$quantity', $address)";
        $result = mysqli_query ($conn, $sql);

        if (!$result){
            die("Error:". $sql. "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    }
    ?>

    
    