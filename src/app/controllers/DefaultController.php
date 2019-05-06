<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');

use Styletools\Libs\Controller\Controller;
use Styletools\Styles\StylesContainer;

class DefaultController extends Controller {
	public function indexAction() {
		$stylesheets = StylesContainer::addStylesheets();
		
		echo $this->render('default/index.html.twig', [
			'stylesheets' => $stylesheets
		]);
	}
}