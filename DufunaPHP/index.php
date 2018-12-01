<?php

$name = 'Olamide';
$age = 12;
$job = 'Developer';
echo "Hello "."World's ".$name.  "<br>She is ".$age." and a $job "."Good day to you ";

define("MIN_SIZE", 200);

echo MIN_SIZE;

$name = ' Olamide';
echo $name . " ";
$name = "Joe";
echo $name . "<br>";


$x = 20;
$y = 10;

if ($x == $y){
    echo "X is eaqual to Y";
} else if ($x == 20) {
    echo "X = 20";
} else {
    echo "X is not equal to Y ";
}
 $food = 'garri';
 switch ($food){
     case 'eba':
        echo "<br>I don't like eba";
         break;
     case 'fish':
         echo "<br>I like fish";
     break;
     case 'garri':
     case 'groundnut':
     echo "<br>I will eat oo";
     break;

     default:
     echo "<br>I will manage";
     break;
 }
 echo "<br>I am done"
?>


