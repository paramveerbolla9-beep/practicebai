<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
#$routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('all_tasks', 'AllTasks::index');
$routes->get('profile', 'Profile::index');
$routes->get('about', 'About::about');