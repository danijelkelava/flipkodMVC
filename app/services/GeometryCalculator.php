<?php

namespace App\Services;

use App\Models\Circle;
use App\Models\Triangle;

class GeometryCalculator
{
	private $triangle;
	private $circle;

	public function __construct($radius, $a, $b, $c)
	{
		$this->triangle = new Triangle($a, $b, $c);
		$this->circle = new Circle($radius);
	}

	public function sumOfAreas()
	{
		return $triangle->area() + $circle->area();
	}

	public function sumOfCircumferences()
	{
		return $triangle->circumference() + $circle->circumference();
	}
}