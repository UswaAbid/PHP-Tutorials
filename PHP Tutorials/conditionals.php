<?php

// using if conditional

$marks = 100;
if ($marks > 80){
    echo "You got an A <br>";
}

// using if-else conditional

$gender = "M";
if($gender == "M"){
    echo "Male";
}else{
    echo "Female";
}

// using multiple conditional

$temp = 25;
if($temp < 10)
{
    echo "<br> It's cold, bundle up!";
}
elseif($temp >= 10 && $temp < 20)
{
    echo "<br> A bit chilly, grab a light jacket!";
}
else
{
    echo "<br> Perfect weather, enjoy your day!";
}




?>