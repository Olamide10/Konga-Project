<?php
   session_start();
   init 'memory_limit', '32M';
  
   if(session_start()){
      
      header("Location: signup.php");
   }
?>