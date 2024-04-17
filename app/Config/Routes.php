<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/clima','Clima::index');

// $routes->get('clima/getClimaByCP','Clima::getClimaByCP');


// Mis rutas
$routes->get('clima/getClimaByHora/(:any)', 'ClimaController::getClimaByHora/$1');
$routes->get('clima/getClimaByCP', 'ClimaController::getClimaByCP');
$routes->get('clima/getUbicaciones','ClimaController::getUbicaciones');
$routes->get('clima/getClimaByFecha/(:any)/(:any)', 'ClimaController::getClimaByFecha/$1/$2');
$routes->get('clima/getClimaExtremo','ClimaController::getClimaExtremo');
$routes->get('clima/getClimaPorUbicacion/(:any)','ClimaController::getClimaPorUbicacion/$1');
$routes->get('clima/getClimaPromedio/(:any)/(:any)','ClimaController::getClimaPromedio/$1/$2');
$routes->get('clima/getClimaPorHoraYUbicacion/(:any)/(:any)','ClimaController::getClimaPorHoraYUbicacion/$1/$2');
$routes->get('clima/getCoordenadasPorUbicacion/(:any)','ClimaController::getCoordenadasPorUbicacion/$1');
$routes->get('clima/getSensacionTermicaPorUbicacion/(:any)','ClimaController::getSensacionTermicaPorUbicacion/$1');