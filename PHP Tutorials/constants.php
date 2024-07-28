<?php

// defining constant in php syntax

  define("PI", 3.1416);
  $radius = 5;
  $area = PI * $radius * $radius;
  echo "The area of the circle with radius $radius is $area <br> ";

// built-in methods

  echo "Current File:". __FILE__;
  echo "<br> Current line:". __LINE__;
  echo "<br> Current directory:". __DIR__;

  echo "<br> PHP version:". PHP_VERSION;
  echo "<br> PHP OS:". PHP_OS;
  echo "<br> Maximum integer:". PHP_INT_MAX;


?>