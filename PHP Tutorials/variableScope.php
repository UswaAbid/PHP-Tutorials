<?php

// Global Variable Scope

$globalvar = "i am global";

function displayGlobal(){
    global $globalvar;
    echo "<p>$globalvar</p>";
}

displayGlobal();

// Local Variable Scope

function displayLocal(){
    $localvar = "i am local";
    echo "<p>$localvar</p>";
}

displayLocal();

// Static Variable Scope

function myStaticCounter(){
    static $count = 0;
    $count++;
    echo"<p>My static power activated: $count</p>";
}

myStaticCounter();
myStaticCounter();
myStaticCounter();


?>