<?php
 
// Strings in php

 $singleQuote = 'PHP strings are simple.';
 $doubleQuote = "but they offer more flexibility";
 $combined =  $singleQuote .' '. $doubleQuote;

 echo  $singleQuote."<br>" ;
 echo  $doubleQuote."<br>"  ;
 echo  $combined."<br>" ;

// string length function : strlen() 

 $phrase = 'PHP is a language of elegance';
 $length = strlen($phrase);
 echo "Phrase length: $length <br>";

// Extracting characters from string using index

 $firstchar = $phrase[0];
 echo "First character: $firstchar <br>";

 $lastchar = $phrase[$length-1];
 echo "Last character:  $lastchar <br>";


?>