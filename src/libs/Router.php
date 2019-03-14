<?php

/*!
 * Styletools 1.3
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs;

require_once('vendor/autoload.php');

use \Styletools\Libs\Route;

class Router {
	private $url;
	private $routes = [];
	private $namedRoutes = [];
	
	public function __construct($url) {
		$this->url = $url;
	}
	
	public function get($path, $callable, $name = null) {
		return $this->add($path, $callable, $name, 'GET');
	}
	
	public function post($path, $callable, $name = null) {
		return $this->add($path, $callable, $name, 'POST');
	}
	
	public function add($path, $callable, $name, $method) {
		$route = new Route($path, $callable);
		$this->routes[$method][] = $route;
		
		if (is_string($callable) && $name === null) {
			$name = $callable;
		}
		
		if ($name) {
			$this->namedRoutes[$name] = $route;
		}
		
		return $route;
	}
	
	public function run() {
		if (!isset($this->routes[$_SERVER['REQUEST_METHOD']]))
		{
			throw new \Exception('REQUEST_METHOD does not exist');
		}
		
		foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
		{
			if ($route->match($this->url))
			{
				return $route->call();
			}
		}

		require('src/app/views/error/404.php');
	}
	
	public function url($name, $params = []) {
		if (!isset($this->namedRoutes[$name]))
		{
			throw new \RouterException('No route matches this name');
		}
		
		return $this->namedRoutes[$name]->getUrl($params);
	}
}