<?php

namespace Phattern;

trait SingletonTrait {
    
    private static $instance;
    
    protected $constructorArguments;
    
    private final function __construct(...$arguments) {
        $this->constructorArguments = $arguments;
    }
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    static function getInstance(...$arguments) {
        if (!isset(self::$instance)) {
            self::$instance = new self(...$arguments);
        }
        
        return self::$instance;
    }
    
}
