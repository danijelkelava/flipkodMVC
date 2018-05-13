<?php

require "vendor/autoload.php";

use App\Bootstrap\Bootstrap;
use App\Models\Circle;
use App\Models\Triangle;

$bootstrap = new Bootstrap($_GET);

var_dump($bootstrap);