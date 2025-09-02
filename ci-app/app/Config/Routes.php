<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Book/add', 'Book::add');
$routes->get('/Book/view', 'Book::view');
$routes->post('/Book/save', 'Book::save');
$routes->get('Book/edit/(:num)', 'Book::edit/$1'); 
$routes->post('Book/update/(:num)', 'Book::update/$1');
$routes->post('Book/delete/(:num)', 'Book::delete/$1');
