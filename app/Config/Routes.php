<?php

use CodeIgniter\Router\RouteCollection;


$routes->setDefaultNamespace('app\Controllers');
// $routes->setDefaultControllers('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes('false');
$routes->set404Override();
/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute('true');
$routes->get('/', 'Home::index');
