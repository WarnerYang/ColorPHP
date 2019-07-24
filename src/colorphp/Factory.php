<?php

namespace colorphp;

class Factory
{
    private static $instance;
    private static $classMap = [];

    private function __construct()
    { }

    private function __clone()
    { }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getClass($class, $option = null, $newInstance = false)
    {
        if (true === $newInstance || !isset(self::$classMap[$class]) || self::$classMap[$class]['option'] !== $option) {
            self::$classMap[$class]['object'] = new $class($option);
            self::$classMap[$class]['option'] = $option;
        }
        return self::$classMap[$class]['object'];
    }
}
