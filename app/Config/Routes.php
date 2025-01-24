<?php

use App\Controllers\Admin;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', [Pages::class, 'index']);
$routes->get('/admin', [Admin::class, 'index']);
$routes->get('/new', [Pages::class, 'createPage']);
$routes->post('/', [Pages::class, 'create']);
