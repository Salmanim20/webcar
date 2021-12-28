<?php

error_reporting(~E_NOTICE);

// 'Home' is the default controller
$controller = $_GET['c'] ?? 'Register';

// 'index' is the default method
$method = $_GET['m'] ?? 'index';

include_once "controllers/Controller.class.php";
include_once "controllers/$controller.class.php";

// Go!
(new $controller)->$method();