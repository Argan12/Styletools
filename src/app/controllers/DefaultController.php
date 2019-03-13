<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');

class DefaultController {
	public function indexAction() {
		require('src/app/views/default/index.php');
	}
}