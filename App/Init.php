<?php

namespace App;

class Init
{

	private $routes;

	function __construct()
	{
		$this->initRoutes();
	}

	public function initRoutes()
	{
		$rota['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$rota['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		$this->setRoutes($rota);
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