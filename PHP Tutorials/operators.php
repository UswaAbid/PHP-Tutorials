<?php

// sum and difference operator

$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$difference = $num1 - $num2;

echo "Sum: $sum";
echo "<br> Difference: $difference";

// equal to and assignment operator

$isEqual = $num1 == $num2;
$isNotEqual = $num1 != $num2;

echo "<br> Equal: " . var_export($isEqual, true);
echo "<br> Not Equal: " . var_export($isNotEqual, true);

// Boolean value 

$isSunny = true;
$isWarm = true;

$goForWalk = $isSunny && $isWarm;
$goForShopping = $isSunny || $isWarm;

echo "<br> Go for a walk: " . var_export($goForWalk, true);
echo "<br> Go for shopping: " . var_export($goForShopping, true);

?>