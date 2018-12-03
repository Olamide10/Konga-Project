<?php
    include('session.php');
    session_start();
    
    $user_check = $_SESSION['login_user'];
    
    $ses_sql = mysqli_query($db,"select email from registration where email = '$email' ");
    
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $login_session = $row['email'];
    
    if(!isset($_SESSION['login_user'])){
       header("location:signup.php");
    }
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>