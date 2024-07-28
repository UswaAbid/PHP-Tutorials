<?php

// syntax of using html in php
  
  $age= 20;
  $name = "Uswa";

  if($age <= 18)
  {
    echo "<p>Welcome, $name! You are not eligible to vote.</p>";
  }
  else{
    echo "<p>Welcome, $name! You are eligible to vote.</p>";
  }

  echo"<ul>";
  
  for($i=1; $i<= 5; $i++)
  {
    echo"<li>item $i</li>";
  }
  echo"</ul>";



?>