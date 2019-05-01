<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

require_once('src/app/models/DatabaseFactory.php');

class CrudBuilder extends DatabaseFactory {
	public function createElement($tableName, array $fields, $value) {
		$fieldsName = '';
		$aliasName = '';
		$bindValueQuery = '';
		
		foreach ($fields as $key)
		{
			if ($key === end($fields))
			{
				$fieldsName .= $key;
			} else {
				$fieldsName .= $key.', ';
			}
		}
		
		foreach ($fields as $alias)
		{
			if ($alias === end($fields))
			{
				$aliasName .= ':'.$alias;
			} else {
				$aliasName .= ':'.$alias.', ';
			}
		}
		
		$database = DatabaseFactory::getConnexion();
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

	public function getElement($tableName, array $values, $options) {
		$get = '';
		$opt = '';
		
		foreach ($values as $select)
		{
			if ($select === end($values))
			{
				$get .= $select;
			} else {
				$get .= $select.', ';
			}
		}
		
		foreach ($options as list($a))
		{
			$opt .= $a;
		}
		
		$database = DatabaseFactory::getConnexion();
		$getElement = $database->query("SELECT $get FROM $tableName $opt");
		
		return $getElement;
	}
	
	public function updateElement($tableName, array $update, array $rowToModify, $values) {
		$newVal = '';
		$bindValueQuery = '';
		
		foreach ($update as $edit)
		{
			if ($edit === end($update))
			{
				$newVal .= $edit.' = :'.$edit;
			} else {
				$newVal .= $edit.' = :'.$edit.', ';
			}
		}
		
		foreach ($rowToModify as $id => $key)
		{
			$getID = $id.' = '.$key;
		}
		
		$database = DatabaseFactory::getConnexion();
		$SQLQuery = "UPDATE $tableName SET $newVal WHERE $getID";
		$updateElement = $database->prepare($SQLQuery);
		
		foreach ($values as list($alias, $var, $type))
		{
			if ($type == 'int')
			{
				$bindValueQuery .= $updateElement->bindValue($alias, $var, \PDO::PARAM_INT);	
			} else if ($type == 'str') {
				$bindValueQuery .= $updateElement->bindValue($alias, $var, \PDO::PARAM_STR);
			}
		}
		
		$updateElement->execute();
		
		return $updateElement;
	}
	
	public function deleteElement($tableName, array $rowToDelete) {
		foreach ($rowToDelete as $id => $key)
		{
			$getID = $id.' = '.$key;
		}
		
		$database = DatabaseFactory::getConnexion();
		
		$SQLQuery = "DELETE FROM $tableName WHERE $getID";
		$deleteElement = $database->prepare($SQLQuery);
		$deleteElement->execute();
		
		return $deleteElement;
	}
}