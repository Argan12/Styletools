<?php

namespace Styletools\Models;

require_once('src/app/models/DatabaseFactory.php');

class CrudManager extends DatabaseFactory {
	public function createElement($tableName, array $fields, $value) {
		$database = DatabaseFactory::getConnexion();
		
		$lastFieldsVal = end($fields);
		$fieldsName = '';
		$aliasName = '';
		$bindValueQuery = '';
		
		foreach ($fields as $key)
		{
			if ($key === $lastFieldsVal)
			{
				$fieldsName .= $key;
			} else {
				$fieldsName .= $key.', ';
			}
		}
		
		foreach ($fields as $alias)
		{
			if ($alias === $lastFieldsVal)
			{
				$aliasName .= ':'.$alias;
			} else {
				$aliasName .= ':'.$alias.', ';
			}
		}
		
		$SQLQuery = "INSERT INTO $tableName($fieldsName) VALUES($aliasName)";
		
		$createElement = $database->prepare($SQLQuery);
		
		foreach ($value as list($bvAlias, $var, $type))
		{
			if ($type == 'int')
			{
				$bindValueQuery .= $createElement->bindValue($bvAlias, htmlspecialchars($var), \PDO::PARAM_INT);
			} else if ($type == 'str') {
				$bindValueQuery .= $createElement->bindValue($bvAlias, htmlspecialchars($var), \PDO::PARAM_STR);
			}
		}
		
		$createElement->execute();
		
		return $createElement;
	}

	public function getElement() {
		
	}
	
	public function updateElement() {
		
	}
	
	public function deleteElement() {
		
	}
}