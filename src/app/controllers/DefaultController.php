<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\App\Controllers;

class DefaultController {
	public function indexAction() {
		require('app/views/default/index.php');
	}
}