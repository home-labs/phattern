<?php

namespace Phattern;

abstract class AbstractSingleton {
    
    private static $instance;
    
//     atrav�s da reflex�o, o encapsulamento do m�todo __construct do filho pode ser checado. Talvez isso deva ser feito atrav�s de m�todos m�gicos
    private function __construct() {
        echo "\ncalled\n\n";
    }
    
    private function __clone() { }
    
    private function __wakeup() { }
    
    static function getInstance(...$arguments) {
        if (!isset(self::$instance)) {
            // $reflection = new ReflectionClass(get_called_class());
            // self::$instance = $reflection->newInstance(...$arguments);
            
            self::$instance = new static(...$arguments);
        }
        
        return self::$instance;
    }
    
}
