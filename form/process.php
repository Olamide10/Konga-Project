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
    function saveToDatabase($firstname, $lastname, $email, $password, $confirm_password, $tel, $gender, $country){
    $serverName = "localhost";
    $database = "sign-up";
    $username = "root";
    $password = "guest123";

    $conn = mysqli_connect($serverName, $username, $password, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO users (firstname, lastname, email, password, confirm_password, tel, gender, country, created_at)
        VALUES ('$firstname' , '$Lastname' , '$email', '$password', '$confirmpassword', '$phonenumber', '$gender', '$country'), NOW())";
    $result = mysqli_query ($conn, $sql);

    if(!$result){
        die("Error: " . $sql. "<br>" . mysqli_error($conn));
    }
    mysqli_close($conn);
    }
<?php
