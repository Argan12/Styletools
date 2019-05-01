<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

class ModelMaker {
	private $modelName;
	
	public function getModelName() {
		return $this->modelName;
	}
	
	public function setModelName($modelName) {
		return $this->modelName = $modelName;
	}
	
	public function getModelContent($getModel) {
		return "<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Models;

require_once('src/app/models/DatabaseFactory.php');

use \Styletools\Models\CrudManager;

class ".trim($getModel)."Manager extends DatabaseFactory {
	public function example() {
		/* Your code here */
	}
}
";
	}
}