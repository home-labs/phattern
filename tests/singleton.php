<?php

require 'autoload.php';

use Phattern\AbstractSingleton;

class SingletonClass extends AbstractSingleton {

//     private function __construct(...$arguments) { }
    
    function aMethod2Example() {
        return "I'm a example of a method from a singleton class, build with {$this->constructorArguments[0]} argument.";
    }
    
}

// $singleton = new SingletonClass();

$singleton = SingletonClass::getInstance('argument1');
echo $singleton->aMethod2Example() . "\n";
