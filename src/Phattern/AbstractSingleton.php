<?php

namespace Phattern;

use
    Exception,
    ReflectionMethod
;

abstract class AbstractSingleton {
    
    private static $instance;
    
    private function __construct() { }
    
    private function __clone() { }
    
    private function __wakeup() { }
    
    static function getInstance(...$arguments) {
        $childName = static::class;
        
        $implementedMagicMethodName = '__construct';
        $reflectionMethod__construct = new ReflectionMethod($childName, $implementedMagicMethodName);
        if ($reflectionMethod__construct->getDeclaringClass()->name !== self::class) {
            throw new Exception("the $implementedMagicMethodName method of $childName class shouldn't be implemented. Otherwise it'll break the singleton pattern.");
        }

        $reflectionMethod__clone = new ReflectionMethod($childName, '__clone');
        if (!$reflectionMethod__clone->isPrivate()) {
            $notPrivateMagicMethodName = '__clone';
        }
        
        $reflectionMethod__wakeup = new ReflectionMethod($childName, '__wakeup');
        if (!$reflectionMethod__wakeup->isPrivate()) {
            $notPrivateMagicMethodName = '__wakeup';
        }
        
        if (isset($notPrivateMagicMethodName)) {
            throw new Exception("the $notPrivateMagicMethodName method of $childName class should be private. Otherwise it'll break the singleton pattern.");
        }
        
        if (!isset(self::$instance)) {
            self::$instance = new static(...$arguments);
        }
        
        return self::$instance;
    }
    
}
