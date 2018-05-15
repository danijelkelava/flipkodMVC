<?php

require "../vendor/autoload.php";

use App\Core\App;
use App\Models\Triangle;
use App\Controllers\TriangleController;

$app = new App;

$triangle = new Triangle('triangle', 3, 4, 5);
$get_triangle_data = new TriangleController($triangle);
$info = $get_triangle_data->getTriangleData();
//var_dump($info);
echo $info;