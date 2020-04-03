<?php

require 'autoload.php';

use 
    Phattern\AbstractSingleton
;

class SingletonClass extends AbstractSingleton {

//     function __construct(...$arguments) { }

    static function getInstance(...$arguments): string {
        if (!isset(parent::$instance)) {
            parent::$instance = new self();
            
//             print_r($arguments);
        }

        return parent::$instance;
    }
    
    function aMethod2Example() {
        return "I'm a example of a method from a singleton class, build with {$this->constructorArguments[0]} argument.";
    }
    
}

// $singleton = new SingletonClass();

$singleton = SingletonClass::getInstance('argument1');
$singleton = SingletonClass::getInstance('argument1');
echo $singleton->aMethod2Example() . "\n";

echo "\n" . get_class($singleton) . "\n";
