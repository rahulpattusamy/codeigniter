<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'StudentController::index');
$routes->get('student', 'StudentController::addStudent');
$routes->get('updatestudent', 'StudentController::updateStudent');
