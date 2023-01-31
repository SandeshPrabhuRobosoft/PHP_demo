<?php
class Car
{
    var $wheels = 4;
    var $engine = 1;
    public $doors = 2;
    protected $lights = 8;
    private $dashboard = 1;
    static $camera = 2;
    //static - It is attached to the class and not attached to the instance.\
    // i.e. $bmw->camera; cannot be used.
    // instead use Car::$camera;

    function __construct()
    {
        echo "Vehicle created" . "<br>";
        $this->doors = 4;
    }
    function getLights()
    {
        echo "lights" . $this->lights . "<br>";
    }
    function getDashboard()
    {
        echo "dashboard" . $this->dashboard . "<br>";
    }
    static function setCamera()
    {
        Car::$camera = 1;
    }
    static function getCamera()
    {
        echo "camera" . Car::$camera . "<br>";
    }
}

class Plane extends Car
{
}

$bmw = new Car();
$jet = new Plane();

echo "wheels" . $jet->wheels . "<br>";

// Public - can be used outside the class.
echo "doors" . $jet->doors . "<br>";

// Protected - can be used only in the declared class or inherited classes.
$jet->getLights();
$bmw->getLights();

// Private - can be used only in the declared class and not by the inherited classes.
$bmw->getDashboard();

//static variable
echo "camera" . Car::$camera . "<br>"; // 2
// -> (arrow) operator using function.
$bmw->getCamera(); // 2
$bmw->setCamera(); // set to 1
$bmw->getCamera(); // 1

// to get access in this method must use static functions.
Car::getCamera(); // 1
Car::setCamera(); // set to 1 
Car::getCamera(); // 1

Car::$camera = 2; // set to 2
echo "camera" . Car::$camera . "<br>"; // 2
