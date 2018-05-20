<?php 

namespace App\Models;

class Circle extends GeometryShape
{
	private $radius;
	const PI = M_PI;

	public function __construct(int $radius)
	{
		$this->type = 'circle';
		$this->radius = $radius;
	}

	public function getRadius()
	{
		return number_format((float)$this->radius, 1, '.', '');
	}
	
	public function area()
	{
		$area = self::PI * pow($this->radius, 2);

		return $area;
	}

	public function circumference()
	{

		$circumference = 2 * self::PI * $this->radius;

		return $circumference;
	}
}

