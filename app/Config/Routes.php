<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/dashboard',['namespace' => 'App\Controllers\Dashboard' ], static function ($routes) {
	$routes->get('/', 'HomeDashboard::index');
	$routes->get('products', 'ProductsController::index');
	$routes->post('products', 'ProductsController::delete');
	$routes->get('create_product','ProductsController::createView');
	$routes->post('create_product', 'ProductsController::create');
	$routes->get('orders','OrdersController::index');
	$routes->get('edit_product/(:num)', 'ProductsController::editView/$1');
	$routes->post('edit_product/(:num)', 'ProductsController::edit/$1');
});

$routes->get('/', 'Home::index');
service('auth')->routes($routes);
