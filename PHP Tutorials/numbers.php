<?php

// Example 1

    $int_1 = 42;
    $int_2 = -17;
    $float_1 = 3.14;
    $float_2 = -0.75;

    $sum = $int_1 + $int_2;
    $diff = $float_1 - $float_2;

    echo "sum: $sum <br> ";
    echo "difference: $diff <br> ";

// Example 2

    $absoluteVal = abs($int_2);
    $roundVal = round($float_1);
    $pow = pow($int_1, 3);

    echo "Absolute Value: $absoluteVal <br> ";
    echo "Round Value: $roundVal <br> ";
    echo "3 to the power of $int_1: $pow <br> ";

// Example 3

    $counter = 10;
    $incremented = ++$counter;
    $decremented = --$counter;

    echo "counter: $counter <br>";
    echo "Incremented Value: $incremented <br>";
    echo "Decremented Value: $decremented <br>";


?>