<?php

define('BASEPATH', __DIR__);

require('core/autoload/autoload.php');
require('core/view/view.php');
require('core/view/viewloader.php');

$autoloader = new Autoload();

spl_autoload_register([$autoloader, 'load']);

$autoloader->register('viewloader', function () {
    return require(BASEPATH . '/core/view/viewloader.php');
});

$view = new View(new ViewLoader(BASEPATH . '/views'));
$router = new Router();
