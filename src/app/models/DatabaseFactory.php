<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Models;

class DatabaseFactory
{
    private static $instance;
    private $connexion;  
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'styletools';

    /**
     * Get the class instance
     *
     * @return the DatabaseConnect singleton instance
     */
    public static function getInstance() {
        if (self::$instance === null) 
		{
            self::$instance = new DatabaseFactory();
        }
		
        return self::$instance;
    }

    /**
     * Private constructor to avoid any external instanciation.
     * Will be called only once by the getInstance method.
     */
    public function __construct() {
		$this->connexion = new \PDO("mysql:host={$this->host};dbname={$this->name};charset=utf8", $this->user, $this->pass);
    }

    /**
     * Private __clone method to prevent cloning
     *
     * @return void
     */
    private function __clone() {
		
	}
    
    public function getConnexion() {
		return $this->connexion;
    }
}