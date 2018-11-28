<?php
/**
 * Interfaces - the next level of abstraction
 *
 * Interfaces, like abstract classes, include abstract methods and constants. However, unlike abstract classes, interfaces can have only public methods, and cannot have variables.
 * The classes that implement the interfaces must define all the methods that they inherit from the interfaces, including all the parameters.
 * We can implement a number of interfaces in the same class.
 *
 * ##Difference between Interface & abstract
 * Interfaces can include abstract methods and constants, but cannot contain concrete methods and variables.
 * All the methods in the interface must be in the public visibility scope.
 * A class can implement more than one interface, while it can inherit from only one abstract class.
 *
 * @note: The key point is that interfaces provide a layer of abstraction so that you can write code that is ignorant of unnecessary details.

 * @link
 */

interface Car
{
    public function setModel($name);
    public function getModel();
}

interface Vehicle
{
    public function setHashWheels($bool);
    public function getHashWheels();
}

class miniCar implements Car
{
    private $model;
    public function setModel($name)
    {
        $this->model = $name;
    }
    public function getModel()
    {
        return $this->model;
    }
}

class microCar implements Car, Vehicle
{
    private $model;
    private $hasWheels;

    public function setModel($name)
    {
        $this->model = $name;
    }
    public function getModel()
    {
        return $this->model;
    }

    public function setHashWheels($bool)
    {
        $this->hasWheels = $bool;
    }
    public function getHashWheels()
    {
        return ($this->hasWheels) ? "has wheels" : "no wheels";
    }

}

$mObj = new microCar();
$mObj->setModel('BMW');
echo $mObj->getModel();
$mObj->setHashWheels(true);
echo $mObj->getHashWheels();
