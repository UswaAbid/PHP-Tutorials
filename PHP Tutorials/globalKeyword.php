<?php
 
 $x = 10;    // global scope variable
 $y = 20;    // global scope variable

 function myText(){
    global $x, $y;
    echo $y= $x + $y;
 }

 myText();
 echo "<br>";
 echo $x."<br>";
 echo $y;

?>