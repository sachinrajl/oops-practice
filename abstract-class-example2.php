<?php
/**
 * Abstract class
 * Abstract classes are special because they can never be instantiated.
 * Instead, you typically inherit a set of base functionality from them in a new class.
 * only abstract classes can hold abstract functions
 *
 * WHEN USE : We use abstract classes when we want to commit the programmer (either oneself or someone else) to write a certain class method,
 * but we are only sure about the name of the method, and not the details of how it should be written.
 *
 * @link https://php5-tutorial.com/classes/abstract-classes/
 */
abstract class Animal
{
    public $name;
    public $age;

    public function describe()
    {
        return $this->name . ', ' . $this->age . " years old";
    }
    abstract public function greet();
}

class Dog extends Animal
{
    public function greet()
    {
        return "Woof!";
    }
    public function describe()
    {
        return parent::describe() . ", and I'm a dog!";
    }
}

$animal = new Dog();
$animal->name = 'Jhon';
$animal->age = 10;

echo $animal->describe();
echo $animal->greet();
