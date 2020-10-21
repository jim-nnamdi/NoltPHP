<?php

require('../bootstrap.php');

$router->add('/', function () use ($view) {
    $view->display("welcome.php");
});
