<?php

namespace App\Models;

interface GeometryShapeInterface
{
	public function surface();
	public function circumference();
}