<?php

namespace fw\Dbal;

class DriverFactory
{
    /**
     * @param string $driver
     * @return IDriver
     */
    public static function getDriver($driverName)
    {
        static $driver = null;
        if (null === $driver){
             $driverClassName = __NAMESPACE__ . '\\Drivers\\' . ucfirst($driverName);
            $driver = new $driverClassName;
        }
        return $driver;
    }
}