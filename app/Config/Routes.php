<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test-database', 'DatabaseTestController::testConnection');

// Registration routes
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/store', 'RegisterController::store');
$routes->get('/register/success', 'RegisterController::success');

//Login routes
$routes->get('/login', 'LoginController::index');
$routes->post('/login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');
// $routes->get('/dashboard', 'LoginController::goToDashboard');

// Dashboard route with applying the auth filter
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']); 

// CRUD Operations
$routes->get('/employees', 'EmployeeController::index');
$routes->get('/employees/create', 'EmployeeController::create');
$routes->post('/employees/store', 'EmployeeController::store');
$routes->get('/employees/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('/employees/update/(:num)', 'EmployeeController::update/$1');
$routes->post('/employees/delete/(:num)', 'EmployeeController::delete/$1');




