<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools;

require_once('vendor/autoload.php');

use \Styletools\Libs\Router;
use \Styletools\Controllers\DefaultController;

$router = new Router($_GET['url']);

$router->get('/', "Default#indexAction");

$router->run();