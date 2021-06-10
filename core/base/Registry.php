<?php

namespace base;

class Registry {
    use TSingleton;
    
    private static $properties = [];
    
    public function getProperties() {
        return self::$properties;
    }
    
    public function getProperty($name) {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
    }
    
    public function setProperty($name, $value) {
        self::$properties[$name] = $value;
    }
    
}
