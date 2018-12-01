<?php
$firstname = array("olumide", "ifedayo", "ejiro" );
$hobbies = array("drawing", "writing", "baking");
$f_h = array_combine ($firstname, $hobbies);

foreach($f_h as $x=>$x_value){
     echo "My name is "."$x "." I love ". $x_value. ".<br>";
 } 
?>