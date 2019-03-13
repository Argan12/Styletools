<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

class StylesheetsLoader {
	public function addStylesheet($filename) {
		$dir = dirname($_SERVER["PHP_SELF"]);
		$stylesheets = "<link rel=\"stylesheet\" href=\"$dir/src/web/css/$filename.css\"  />";
		
		return $stylesheets;
	}
}