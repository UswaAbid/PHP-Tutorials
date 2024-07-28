<?php

// simple for-loop example 1

 for($i = 1; $i <= 5; $i++)
 {
    echo "Iteration $i: Hello World! <br>";
 }

 echo "<br><br>";

 // simple for-loop example 2

 for($num = 3; $num > 0; $num--)
 {
    echo "Countdown: $num <br>";
 }

 echo "<br><br>";

 // simple for-loop example 3

 $names = ["Alice", "Bob", "Tisa"];

 for($index = 0; $index < count($names); $index++)
 {
    echo "Hello $names[$index]! <br>";
 }

 echo "<br><br>";

 // Nested for-loop

 for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 3; $j++){
        echo "($i, $j)";
    }
       echo "<br>";
 }

?>