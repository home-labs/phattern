<?php

namespace Phattern;

abstract class AbstractSingleton {
    
    private static $instance;
    
    private function __construct() { }
    
    private function __clone() { }
    
    private function __wakeup() { }
    
    static function getInstance(...$arguments) {
        if (!isset(self::$instance)) {
            // $reflection = new ReflectionClass(get_called_class());
            // self::$instance = $reflection->newInstance(...$arguments);
            
            // o encapsulamento do método construct do filho pode ser checado para que um erro seja lançado
            self::$instance = new static(...$arguments);
        }
        
        return self::$instance;
    }
    
}
