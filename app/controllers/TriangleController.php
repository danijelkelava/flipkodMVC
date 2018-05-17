<?php

namespace App\Controllers;

use App\Models\Triangle;

class TriangleController extends Controller
{
	private $triangle;
	private $data = [];

	public function __construct()
	{		
	}

	public function index($a = '', $b = '', $c = '')
	{
		if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
			$triangle = new Triangle('triangle', $a, $b, $c);
			$this->data['type'] = $triangle->getType();
			$this->data['circumference'] = $triangle->circumference();
			echo json_encode($this->data);
		}
		
	}

}