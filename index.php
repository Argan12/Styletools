<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools;

require_once('src/libs/styletoolsframe/Router.php');
require_once('src/app/controllers/DefaultController.php');

use \Styletools\Libs\StyletoolsFrame\Router;
use \Styletools\App\Controllers\DefaultController;

$router = new Router($_GET['url']);

$router->get('/', "Default#indexAction");

$router->run();