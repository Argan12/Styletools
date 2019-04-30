<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

require_once('vendor/autoload.php');

class Controller {
	public function render($path, $options = '') {
		$loader = new \Twig_Loader_Filesystem('src/app/views');
		$twig = new \Twig_Environment($loader, [
			'cache' => false,
		]);
		
		return $twig->render($path, $options);
	}
}