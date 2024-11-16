<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/dashboard',['namespace' => 'App\Controllers\Dashboard' ], static function ($routes) {
	$routes->get('/', 'HomeDashboard::index');
	$routes->get('products', 'ProductsController::index');
	$routes->get('create_product','ProductsController::createView');
	$routes->post('create_product', 'ProductsController::create');
	$routes->get('orders','OrdersController::index');
});

$routes->get('/', 'Home::index');
service('auth')->routes($routes);
