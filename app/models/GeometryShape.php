<?php 

namespace App\Models;

abstract class GeometryShape implements GeometryShapeInterface
{
	protected $type;

	public function getType()
	{
		return $this->type;
	}
}