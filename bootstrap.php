<?php

require('core/view/view.php');
require('core/view/viewloader.php');

$view_loader = new ViewLoader(BASEPATH . '/views/');

$view = new View($view_loader);
