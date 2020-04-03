<?php

namespace Phattern;

trait SingletonTrait {
    
    private static $instance;
    
    private final function __construct() {}
    
    private final function __clone() { }
    
    private final function __wakeup() { }
    
    abstract static function getInstance(...$arguments);
    
}
