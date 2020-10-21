<?php

class Router
{
    private $routes = [];
    private $not_found;

    public function __construct()
    {
        $this->not_found = function ($url) {
            echo "404 - $url was not found";
        };
    }

    public function add($url, $action)
    {
        $this->routes[$url] = $action;
    }

    public function setNotFound($action)
    {
        $this->not_found = $action;
    }

    public function dispatch()
    {
        foreach ($this->routes as $url => $action) {
            if ($url == $_SERVER["REQUEST_URI"]) {
                return $action();
            }
        }
        call_user_func_array($this->not_found, [$_SERVER["REQUEST_URI"]]);
    }
}
