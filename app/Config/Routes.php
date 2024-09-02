<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->match(['get','post'],'auth/login','Auth::login');
$routes->match(['get','post'],'auth/register','Auth::register');
$routes->get('auth/logout','Auth::logout');

$routes->get('/bank/index/(:num)','Bank::index/$1');
$routes->match(['get','post'],'bank/Depot/(:num)','Bank::Depot/$1');
$routes->match(['get','post'],'bank/Retrait/(:num)','Bank::Retrait/$1');
$routes->match(['get','post'],'bank/Emprunt/(:num)','Bank::Emprunt/$1');
$routes->get('bank/transaction','Bank::transaction');