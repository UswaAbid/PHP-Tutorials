<?php

// simple example of if-else statements in php

  $t = date(32);

  if($t < 20)
  {
    echo "Have a good day!";
  }
  elseif($t > 20 && $t < 30)
  {
    echo "Have a good night!";
  }
  else{
    echo "Have a nice day!";
  }


?>