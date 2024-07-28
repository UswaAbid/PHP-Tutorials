<?php

// Simple Array

  $fruits = array("mango", "apple", "grapes");

  echo "I like " .$fruits[0]. ", " .$fruits[1]. " and " .$fruits[2]. ". <br>";
  echo $fruits[0] . "<br>";


// Associative Array
  
  $person = array(
    "name" => "Mary",
    "age" => 20,
    "city" => "Newyork"
);

 echo $person ["name"] . "<br>";


// 2D Array

 $matrix = array(
     array(1,2,3),
     array(4,5,6),
     array(7,8,9)
 );

 echo $matrix [2][1] . "<br>";


?>