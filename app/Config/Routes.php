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
	$routes->get('accounts', 'AccountsController::index');
	$routes->post('accounts', 'AccountsController::action');
	$routes->get('create_account','AccountsController::createView');
	$routes->post('create_account', 'AccountsController::create');
	$routes->get('edit_account/(:num)', 'AccountsController::editView/$1');
	$routes->post('edit_account/(:num)', 'AccountsController::edit/$1');
	$routes->get('change_password/(:num)', 'AccountsController::changePasswordView/$1');
	$routes->post('change_password/(:num)', 'AccountsController::changePassword/$1');
});

$routes->get('/', 'Home::index');
service('auth')->routes($routes);
