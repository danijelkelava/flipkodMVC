<?php

namespace App\Controllers;

use App\Models\Circle;

class CircleController extends Controller
{
	private $data = [];

	public function __construct()
	{}

	public function index($radius = '')
	{
		if (is_numeric($radius)) {
			$circle = new Circle($radius);
			$this->data['type'] = $circle->getType();
			$this->data['circumference'] = $circle->circumference();
			$this->data['area'] = $circle->area();
			echo json_encode($this->data);
		}
	}
}