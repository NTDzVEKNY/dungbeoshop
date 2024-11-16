<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/dashboard',['namespace' => 'App\Controllers\Dashboard' ], static function ($routes) {
	$routes->get('/', 'HomeDashboard::index');
	$routes->get('products', 'ProductsController::index');
	$routes->get('create_product','ProductsController::createView');

	$routes->get('orders','OrdersController::index');
});

service('auth')->routes($routes);
