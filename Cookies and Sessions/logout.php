<?php
   session_start();
    if(session_end()){
      
      header("Location: signup.php");
   }
?>