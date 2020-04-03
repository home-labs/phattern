<?php

namespace Phattern;

use
    Exception
;

trait SingletonTrait {
    
    private static $instance;
    
    private final function __construct() {
        $className = static::class;
        
        if (isset(self::$instance)) {
            throw  new Exception("Instance of $className such has already been created.");
        }
    }
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    abstract static function getInstance(...$arguments);
    
}
