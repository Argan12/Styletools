<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Styles;

require_once('vendor/autoload.php');

use Styletools\Libs\FilesLoader;

class StylesContainer {
	public static function addStylesheets() {
		$stylesheets = array(
			FilesLoader::load('css', 'main')
		);
		
		return $stylesheets;
	}
}