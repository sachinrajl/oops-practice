<?php
/**
 * An abstract class is a class that has at least one abstract method. Abstract methods can only have names and arguments, and no other code.
 * Thus, we cannot create objects out of abstract classes. Instead, we need to create child classes that add the code into the bodies of the methods, and use these child classes to create objects.
 *
 * @link https://phpenthusiast.com/object-oriented-php-tutorials/abstract-classes-and-methods
 */
abstract class Car
{
    // Abstract classes can have properties
    protected $tankVolume;

    // Abstract classes can have non abstract(concrete method) methods
    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }
    public function getTankVolume()
    {
        return $this->tankVolume;
    }

    // Abstract method
    abstract protected function calcNumMilesOnFullTank();
}

class Honda extends Car
{
    // Since we inherited abstract method, we need to define it in the child class,
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume * 30;
        return $miles;
    }
}

class Toyota extends Car
{
    // Since we inherited abstract method, we need to define it in the child class,
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        return $this->tankVolume * 35;
    }
    public function getColor()
    {
        return "beige";
    }
}

$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo $toyota1->calcNumMilesOnFullTank(); //330
echo $toyota1->getColor(); //beige
echo $toyota1->getTankVolume(); //use of  getter 
