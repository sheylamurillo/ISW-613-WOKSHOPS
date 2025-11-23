<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/users', 'User::index');
$routes->get('/users/create', 'User::create');
$routes->post('/users/store', 'User::store');
$routes->get('/users/edit/(:num)', 'User::edit/$1');
$routes->post('/users/update/(:num)', 'User::update/$1');

$routes->get('/careers', 'Careers::index');
$routes->get('/careers/create', 'Careers::create');
$routes->post('/careers/store', 'Careers::store');
$routes->get('/careers/edit/(:num)', 'Careers::edit/$1');
$routes->post('/careers/update/(:num)', 'Careers::update/$1');