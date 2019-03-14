<?php

namespace Styletools\Models;

require_once('src/app/models/DatabaseFactory.php');

class CrudManager extends DatabaseFactory {
	public function createElement($table, $data = array()) {
		$database = DatabaseFactory::getConnexion();
		
		// $create = $database('INSERT INTO toto')
	}
	
	public function getElement() {
		
	}
	
	public function updateElement() {
		
	}
	
	public function deleteElement() {
		
	}
}