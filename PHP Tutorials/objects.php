<?php

// Syntax of creating class in php

class Car{
    public  $year;
    public  $make;
    public  $model;

    public function displayInfo(){
        echo "$this->year $this->make $this->model";
    }

}

// creating object 1 of class Car

$car1 = new Car();
$car1->year = 2017;
$car1->make = "Toyota";
$car1->model = "Camry";

// creating object 2 of class Car

$car2 = new Car();
$car2->year = 2018;
$car2->make = "Suzuki";
$car2->model = "Mustang";

// Display output using function

$car1->displayInfo();
echo "<br>";
$car2->displayInfo();

?>