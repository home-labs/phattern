<?php

require 'autoload.php';

use Phattern\AbstractSingleton;

class SingletonClass extends AbstractSingleton {
    
//     function __construct($mamalName = '') { }
    
    function aMethod2Example() {
        return "I'm a example of a method from a singleton class.";
    }
    
}

// $singleton = new SingletonClass();

$singleton = SingletonClass::getInstance();
echo $singleton->aMethod2Example() . "\n";
