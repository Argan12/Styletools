<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Components;

class Controller {
	public function render($template) {
		$view = require($template);
		
		return $view;
	}
}