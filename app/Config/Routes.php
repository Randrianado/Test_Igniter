<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->post('/auth/loginProcess','Auth::loginProcess');
$routes->get('/logout','Auth::logout');
