<?php

use App\Controllers\Home;
use Core\Http\Router;

$route = new Router();

$route->get('/home', [Home::class, 'index']);

$route->run();