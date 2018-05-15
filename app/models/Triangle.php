<?php 

namespace App\Models;

class Triangle extends GeometryShape
{
	private $a, $b, $c;
	
	public function __construct($type, $a, $b, $c)
	{
		$this->type = $type;
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function getSideLengths()
	{
		return $sideLengths;
	}

	public function surface()
	{

	}

	public function circumference()
	{
		return $this->a + $this->b + $this->c; 
	}
}