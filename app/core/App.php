<?php

namespace App\Core;

class App
{
	public $controller = '\App\Controllers\HomeController';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();
		var_dump($url);
		if (isset($url) && file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
			$this->controller = '\App\Controllers\\' . ucfirst($url[0]) . 'Controller';
			unset($url[0]);
		}

		$this->controller = new $this->controller;

		//var_dump($this->controller);

		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		print_r($url);
	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}