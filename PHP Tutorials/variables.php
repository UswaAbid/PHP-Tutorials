<?php

// Initializing variables example 1

$name = "Wizard";
$age = "20";
echo "<p>Hello, $name! You are $age years old.</p>";

// Initializing variables example 2

$isWizard = true;
$magicLevel = 8.5;
echo "<p>Am I a Wizard?".($isWizard ? " Yes": "No").".</p>";
echo "<p>My Magic Level is $magicLevel.</p>";

// Initializing variables example 3

$greet = "Greeting";
$greet .= ", magical beggings!";    // concatenation
echo $greet;

?>