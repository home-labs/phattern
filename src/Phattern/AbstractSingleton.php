<?php

namespace Phattern;

abstract class AbstractSingleton {
    
    private static $instance;
    
    private final function __construct() { }
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        
        return self::$instance;
    }
    
}
