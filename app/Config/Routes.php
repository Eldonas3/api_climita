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

// Rutas con respuestas
$routes->get('clima/getUbicaciones2','ClimaController::getUbicaciones2');
$routes->get('clima/getClimaByCP2', 'ClimaController::getClimaByCP2');
$routes->get('clima/getClimaByHora2/(:any)', 'ClimaController::getClimaByHora2/$1');
$routes->get('clima/getClimaByFecha2/(:any)/(:any)', 'ClimaController::getClimaByFecha2/$1/$2');
$routes->get('clima/getClimaExtremo2','ClimaController::getClimaExtremo2');
$routes->get('clima/getClimaPorUbicacion2/(:any)','ClimaController::getClimaPorUbicacion2/$1');
$routes->get('clima/getClimaPromedio2/(:any)/(:any)','ClimaController::getClimaPromedio2/$1/$2');
$routes->get('clima/getClimaPorHoraYUbicacion2/(:any)/(:any)','ClimaController::getClimaPorHoraYUbicacion2/$1/$2');
$routes->get('clima/getCoordenadasPorUbicacion2/(:any)','ClimaController::getCoordenadasPorUbicacion2/$1');
$routes->get('clima/getSensacionTermicaPorUbicacion2/(:any)','ClimaController::getSensacionTermicaPorUbicacion2/$1');