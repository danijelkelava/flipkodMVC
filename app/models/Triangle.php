<?php 

namespace App\Models;

class Triangle extends GeometryShape
{
	private $a, $b, $c;
	
	public function __construct($a, $b, $c)
	{
		$this->type = 'triangle';
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function getSideLengths()
	{
		return $sideLengths;
	}

	public function area()
	{
		$s = ($this->a + $this->b + $this->c)/2;

		$area = sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));

		return $area;
	}

	public function circumference()
	{
		$circumference = $this->a + $this->b + $this->c;

		return $circumference;
	}
}