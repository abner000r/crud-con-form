<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('planes','PlanesController::index');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');
$routes->post('agregar_plan','PlanesController::agregarPlan');



$routes->get('lineas','LineasTelefonicasController::index');
$routes->get('nuevas_lineas','LineasTelefonicasController::nuevasLineas');
$routes->post('agregar_lineas','LineasTelefonicasController::agregarLineas');


$routes->get('clientes','ClientesController::index');
$routes->get('nuevos_clientes','ClientesController::nuevosClientes');
$routes->post('agregar_clientes','ClientesController::agregarClientes');

//eliminar plan 
$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');