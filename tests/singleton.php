<?php

require 'autoload.php';

use 
//     Phattern\AbstractSingleton
    Phattern\SingletonTrait
;

// class SingletonClass extends AbstractSingleton {
class SingletonClass {
    
    use SingletonTrait;

//     function __construct(...$arguments) { }
    
    function aMethod2Example() {
        return "I'm a example of a method from a singleton class, build with {$this->constructorArguments[0]} argument.";
    }
    
}

// $singleton = new SingletonClass();

$singleton = SingletonClass::getInstance('argument1');
echo $singleton->aMethod2Example() . "\n";

echo "\n" . get_class($singleton) . "\n";
