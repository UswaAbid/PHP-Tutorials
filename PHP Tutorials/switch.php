<?php

// Switch syntax example 1

   $dayofweek = "Wednesday";

   switch($dayofweek){

   case "Monday";
   echo "Start of the week!";
   break;

   case "Wednesday";
   echo "Halfway there!";
   break;

   case "Friday";
   echo "Weekend is near!";
   break;

   default:
   echo "Enjoy your day!";

   }

   echo "<br>";

// Switch syntax example 2

   $weather = "rainy";

   switch($weather){

   case "rainy";
   echo "Grab an umberalla!";
   break;

   case "sunny";
   echo "It is a sunny day, have fun!";
   break;

   default:
   echo "Check the forecaste!";

   }



?>