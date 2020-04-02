<?php

namespace Phattern;

abstract class AbstractSingleton {
    
    private static $instance;
    
    protected $constructorArguments;
    
    private final function __construct(...$arguments) {
        $this->constructorArguments = $arguments;
    }
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    static function getInstance(...$arguments) {
        if (!isset(self::$instance)) {
            self::$instance = new static(...$arguments);
        }
        
        return self::$instance;
    }
    
}
