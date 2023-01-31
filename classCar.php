<?php
class Car
{
    var $wheels = 4;
    var $engine = 1;
    var $doors = 2;
    function moveWheels()
    {
        echo "Wheels Move" . "<br>";
    }
    function moreEngines()
    {
        $this->engine = 2;
    }
}

if (class_exists("Car")) echo "class_exists yes" . "<br>";
else echo "class_exists no" . "<br>";

if (method_exists("car", "moveWheels")) echo "moveWheels method_exists" . "<br>";
else echo "moveWheels don't exist" . "<br>";

$bmw = new Car();
$truck = new Car();

$bmw->moveWheels();

echo "wheels" . $bmw->wheels . "<br>";

$bmw->doors = 4;
echo "doors" . $bmw->doors . "<br>";

echo "engine" . $bmw->engine . "<br>";
$bmw->moreEngines();
echo "engine" . $bmw->engine . "<br>";

echo "TruckWheels" . $bmw->wheels = 10 . "<br>";
