<?php

// example of greet() function

   function greet(){
    echo "Hello Ma'am!  <br>";
   }

  greet();

// example of greetusers() function

  function greetusers($name){
    echo "Hello, $name! <br>";
  }

  greetusers("Tisa");

// example of add() function

  function add($a, $b){
    return $a + $b;
  }

  echo "Sum:". add(5,3). "<br>";

// example of factorial() function using recursion

  function factorial($n){
    if($n <= 1){
        return 1;
    }else{
        return $n * factorial($n - 1);
    }
  }

  $result = factorial(5);
  echo "Factorial of 5 is: $result <br>"


?>