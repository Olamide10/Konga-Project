<?php
   session_start();
 
   if(session_start()){
      
      header("Location: signup.php");
   }
?>