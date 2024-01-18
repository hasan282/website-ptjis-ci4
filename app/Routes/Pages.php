<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/about/about-us', 'About::index');
$routes->get('/about/histories', 'About::index');
$routes->get('/about/visi-misi', 'About::index');
$routes->get('/about/experience', 'About::index');
$routes->get('/about/mitra-client', 'About::index');
