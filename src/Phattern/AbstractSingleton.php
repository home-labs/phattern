<?php

namespace Phattern;

use
    Exception
;

abstract class AbstractSingleton {

    protected static $instance;

    protected final function __construct() {
        $childClassName = static::class;
        
        if (isset(self::$instance)) {
            throw  new Exception("Instance of $childClassName such has already been created.");
        }
    }
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    abstract static function getInstance(...$arguments);
    
}
