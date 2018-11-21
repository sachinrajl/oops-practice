<?php
/**
 * If you create a method in the child class having the same name,
 * same number of parameters and the same access specifier as in it’s parent
 * then we can say that we are doing method overriding in PHP
 * @link https://www.phpzag.com/overloading-and-overriding-in-php/
 */
class AA
{
    public function output($args)
    {
        echo "\n Parent - the parameter value is $args";
    }
}
class BB extends AA
{
    public function output($args)
    {
        echo "\n Child - the parameter value is $args";
    }
}
$obj1 = new AA;
$obj2 = new BB;
$obj1->output('class AA');
$obj2->output('class BB');
