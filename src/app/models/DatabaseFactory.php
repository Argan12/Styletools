<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Models;

class DatabaseFactory {
	public static function getConnexion() {
		$host = '';
		$dbname = '';
		$charset = 'utf8';
		$root = '';
		$password '';
		
		$database = new \PDO('mysql:host='.$host.';dbname='.$dbname.';charset='.$charset, $root, $password);
		$database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		return $database;
	}
}