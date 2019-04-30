<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');

use Styletools\Libs\Controller;
use Styletools\Libs\FilesLoader;
use Styletools\Libs\StylesFactory;

class DefaultController extends Controller {
	public function indexAction() {
		return $this->render('src/app/views/default/index.php');
	}
	
	public function testTwig() {
		$stylesheets = array(
			FilesLoader::load('css', 'main'),
			FilesLoader::load('css', 'toto')
		);
		
		echo $this->render('default/test.html.twig', [
			'stylesheets' => $stylesheets,
			'navicon' => StylesFactory::getNavicon()
		]);
	}
}