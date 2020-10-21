<?php

require('../core/view/view.php');
require('../core/view/viewloader.php');

$view_path = __DIR__ . '/../views/';

$view_loader = new ViewLoader($view_path);

$view = new View($view_loader);

$view->display("welcome.php");
