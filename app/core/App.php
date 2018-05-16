<?php

namespace App\Core;

class App
{
	protected $controller = 'triangle';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();
		//var_dump($url);
		if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
			$this->controller = '\\App\Controllers\\' . ucfirst($url[0]) . 'Controller';
			echo 'yes';
			unset($url[0]);
		}

		$this->controller = new $this->controller;
	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}