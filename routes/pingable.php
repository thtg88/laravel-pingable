<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

$method = Config::get('pingable.route.method');
$name = Config::get('pingable.route.name');
$path = Config::get('pingable.route.path');
$controller = Config::get('pingable.controller');

Route::$method($path, $controller)->name($name);
