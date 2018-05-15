<?php

namespace App\Controllers;

use App\Models\Triangle;

class TriangleController extends Controller
{
	private $triangle;
	private $data = [];

	public function __construct(Triangle $triangle)
	{
		$this->triangle = $triangle;
		$this->data['type'] = $this->triangle->getType();
		$this->data['circumference'] = $this->triangle->circumference();		
	}

	public function index()
	{
		echo 'triangle/index';
	}

	public function getTriangleData()
	{
		return json_encode($this->data);
	}

}