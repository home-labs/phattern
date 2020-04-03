<?php

require 'autoload.php';

use 
    Phattern\SingletonTrait
;

class SingletonClass {
    
    use SingletonTrait;

//     function __construct() { }

    static function getInstance(...$arguments) {
        if (!isset(self::$instance)) {
            self::$instance = new self();
            
//             print_r($arguments);
        }

        return self::$instance;
    }
    
    function aMethod2Example() {
        return "I'm a example of a method from a singleton class, build with {$this->constructorArguments[0]} argument.";
    }
    
}

// $singleton = new SingletonClass();

$singleton = SingletonClass::getInstance('argument1');
echo $singleton->aMethod2Example() . "\n";

echo "\n" . get_class($singleton) . "\n";
