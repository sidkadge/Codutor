<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('header', 'Home::header');
$routes->get('footer', 'Home::footer');
$routes->get('AdminDashboard', 'AdminController::AdminDashboard');

$routes->get('book-free-trail', 'Home::BookFreeTrail');
$routes->post('book-free-trail', 'Home::SaveFreeTrial');