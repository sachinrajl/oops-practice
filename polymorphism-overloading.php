<?php
/**
 * polymorphism in OOP.  According to Object Oriented Programming (OOP) concept if a class has 
 * methods of the same name but different parameters then we say that we are overloading that method. 
 * NOTE: As discussed above PHP does not support method overloading compared to other language like Java or C++
 */
class dog
{
    public $Name;

    public function bark()
    {
        print "Woof!\n";
    }

    /* public function meow()
    {
    print "Dogs don't meow!\n";
    } */

    public function __call($function, $args)
    {
        $args = implode(', ', $args);
        print "Call to $function() with args '$args' failed!\n";
    }
}

$poppy = new dog;
$poppy->meow("foo", "bar", "baz");
