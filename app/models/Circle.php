<?php 

namespace App\Models;

class Circle extends GeometryShape
{
	private $radius;

	public function __construct($radius)
	{
		$this->type = 'circle';
		$this->radius = $radius;
	}
	
	public function area()
	{
	}

	public function circumference()
	{
		$pi = pi();

		$circumference = 2 * $pi * $this->radius;

		return $circumference;
	}
}

