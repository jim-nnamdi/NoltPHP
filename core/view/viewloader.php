<?php

class ViewLoader
{

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load($view_name)
    {
        if (file_exists($this->path . $view_name))
            return file_get_contents($this->path . $view_name);
        throw new Exception("view does not exists:" . $this->path . $view_name);
    }
}
