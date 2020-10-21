<?php

class Autoload
{
    private $autoloadable = [];

    public function register($name, $loader = false)
    {
        if (is_callable($loader || $loader == false)) {
            $this->autoloadable[$name] =  $loader;
            return;
        }
        throw new Exception("loader must be callable" . $name);
    }
}
