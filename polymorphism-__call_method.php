<?php
/**
 * polymorphism in OOP.  According to Object Oriented Programming (OOP) concept if a class has
 * methods of the same name but different parameters then we say that we are overloading that method.
 * NOTE: As discussed above PHP does not support method overloading compared to other language like Java or C++
 * Use of method overloading
 */
class dog
{
    /*   public function sub(){
    echo __FUNCTION__; //predefined constants
    } */
    public function __call($function, $args)
    {
        $c = array_sum($args);
        echo "Method Overloading : " . $c . "<br/>";
    }
}

$poppy = new dog;
$poppy->add(1, 5, 7);
$poppy->add(1, 5);
$poppy->sub(1, 25);
