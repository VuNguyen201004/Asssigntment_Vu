<?php

use Vu\Mvcoop\Controllers\Admin\ProductController;
use Vu\Mvcoop\Controllers\Client\AuthController;
use Vu\Mvcoop\Controllers\Client\CategoryClientController;
use Vu\Mvcoop\Controllers\Client\HomeController;

$router->get('/', HomeController::class . '@index');

$router->get('/products',          ProductController::class    . '@index');
$router->get('/products/{id}',     ProductController::class    . '@detail');

$router->get('/auth/login',            AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');

// Route mới cho CategoryClientController
$router->get('/categories',          CategoryClientController::class . '@index');
$router->get('/categories/{id}',     CategoryClientController::class . '@detail');
