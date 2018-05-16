<?php

namespace App\Controllers;

use App\Models\Triangle;

class TriangleController extends Controller
{
	private $triangle;
	private $data = [];

	public function __construct()
	{
		$this->triangle = new Triangle('triangle', 3, 4, 5);
		$this->data['type'] = $this->triangle->getType();
		$this->data['circumference'] = $this->triangle->circumference();		
	}

	public function index()
	{
		echo 'triangle/index';
	}

	public function getData()
	{
		return json_encode($this->data);
	}

}