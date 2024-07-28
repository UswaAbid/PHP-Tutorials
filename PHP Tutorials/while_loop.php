<?php

// writing while-loop Syntax 1

$counter = 1;
while($counter <= 5){
    echo "Iteration $counter: Hello World! <br>";
    $counter++;
}

echo "<br><br>";
$condition = true;
while($condition){
    echo "This loop runs indefinitely! <br>";
    $condition = false;
}

echo "<br><br>";

// writing while-loop Syntax 2

$num = 3;

while($num > 0):
    echo "Countdown: $num <br>";
    $num--;
endwhile;










?>