<?php

/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Models;

class DatabaseConfig {
	protected $serverName;
	protected $dbName;
	protected $userName;
	protected $pass;
	
	function databaseConfig() {
		$this->serverName = 'localhost';
		$this->dbName = '';
		$this->userName = 'root';
		$this->pass = '';
	}
}