<?php
   include("config.php");
   session_start();
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db = "registration";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $db);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
   if($result->num_rows ) {
      $email = ($_POST['email']);
      $password =($_POST['password']);

      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      while($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"]. " - email: " . $row["email"]. " " . $row["password"]. "
         <br>";
      }
  } else {
   header("location: welcome.php");
   $error = "Invalid login credentials";
  }
  $conn->close();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                        
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Email Address:</label><input type = "email" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br/>
               </form>
               
               <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
mysqli_real_escape_string
// $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
//       $result = mysqli_query($db,$sql); or die(mysql_error());
//       $count = mysqli_num_rows($result);
     // If result matched $email and $password, table row must be 1 row
		
   //   if($count == 1) {
   //    session_register("email");
   //    $_SESSION['login_email'] = $email; 