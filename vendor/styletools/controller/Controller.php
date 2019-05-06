<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Controller;

require_once('vendor/autoload.php');

class Controller {
	public function redirect($location) {
		header('Location:'.$location);
		exit;
	}
	
	public function pageNotFound() {
		
	}
		
	public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true) {
		setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
	}
	
	public function render($path, $options = '') {
		$loader = new \Twig_Loader_Filesystem('src/app/views');
		$twig = new \Twig_Environment($loader, [
			'cache' => false,
		]);
		
		return $twig->render($path, $options);
	}
}