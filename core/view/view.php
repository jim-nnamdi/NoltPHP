<?php

class View
{

    public function __construct($view_loader)
    {
        $this->view_loader = $view_loader;
    }

    public function display($view_name)
    {
        echo $this->view_loader->load($view_name);
    }
}
