<?php

namespace App;

class Init
{

	private $routes;

	function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function initRoutes()
	{
		$rota['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$rota['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		$this->setRoutes($rota);
	}

	public function run($url)
	{
		array_walk($this->routes, function($routes) use ($url){
			if ($routes['route']==$url) {
				$classe = 'App\\Controller\\'.ucfirst($routes['controller']);
				$action = $routes['action'];
				$controller = new $classe;
				$contoller->$action();
			}

		});
	}

	public function setRoutes(array $ar)
	{
		$this->routes = $ar;
	}

	public function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}