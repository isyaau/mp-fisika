<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Login::index');

$routes->get('/home', 'Home::index', ['Filter' => 'auth']);

// Usaha
$routes->get('/usaha/1', 'Usaha::usaha1', ['Filter' => 'auth']);
$routes->get('/usaha/2', 'Usaha::usaha2', ['Filter' => 'auth']);
$routes->get('/usaha/3', 'Usaha::usaha3', ['Filter' => 'auth']);
$routes->get('/usaha/4', 'Usaha::usaha4', ['Filter' => 'auth']);
$routes->get('/usaha/5', 'Usaha::usaha5', ['Filter' => 'auth']);
$routes->get('/usaha/6', 'Usaha::usaha6', ['Filter' => 'auth']);
$routes->get('/usaha/7', 'Usaha::usaha7', ['Filter' => 'auth']);
$routes->get('/usaha/8', 'Usaha::usaha8', ['Filter' => 'auth']);
$routes->get('/usaha/9', 'Usaha::usaha9', ['Filter' => 'auth']);
$routes->get('/usaha/10', 'Usaha::usaha10', ['Filter' => 'auth']);
$routes->get('/usaha/11', 'Usaha::usaha11', ['Filter' => 'auth']);
$routes->get('/usaha/12', 'Usaha::usaha12', ['Filter' => 'auth']);
$routes->get('/usaha/13', 'Usaha::usaha13', ['Filter' => 'auth']);
$routes->get('/usaha/14', 'Usaha::usaha14', ['Filter' => 'auth']);
$routes->get('/usaha/15', 'Usaha::usaha15', ['Filter' => 'auth']);
$routes->get('/usaha/test', 'Usaha::test', ['Filter' => 'auth']);

// Tuas Pengungkit
$routes->get('/tuas/1', 'Tuas::tuas1', ['Filter' => 'auth']);
$routes->get('/tuas/2', 'Tuas::tuas2', ['Filter' => 'auth']);
$routes->get('/tuas/3', 'Tuas::tuas3', ['Filter' => 'auth']);
$routes->get('/tuas/4', 'Tuas::tuas4', ['Filter' => 'auth']);
$routes->get('/tuas/5', 'Tuas::tuas5', ['Filter' => 'auth']);
$routes->get('/tuas/test', 'Tuas::test', ['Filter' => 'auth']);

// Bidang
$routes->get('/bidang/1', 'Bidang::bidang1', ['Filter' => 'auth']);
$routes->get('/bidang/2', 'Bidang::bidang2', ['Filter' => 'auth']);
$routes->get('/bidang/3', 'Bidang::bidang3', ['Filter' => 'auth']);
$routes->get('/bidang/4', 'Bidang::bidang4', ['Filter' => 'auth']);
$routes->get('/bidang/test', 'Bidang::test', ['Filter' => 'auth']);

// Katarol
$routes->get('/katrol/1', 'Katrol::katrol1', ['Filter' => 'auth']);
$routes->get('/katrol/2', 'Katrol::katrol2', ['Filter' => 'auth']);
$routes->get('/katrol/3', 'Katrol::katrol3', ['Filter' => 'auth']);
$routes->get('/katrol/4', 'Katrol::katrol4', ['Filter' => 'auth']);
$routes->get('/katrol/5', 'Katrol::katrol5', ['Filter' => 'auth']);
$routes->get('/katrol/6', 'Katrol::katrol6', ['Filter' => 'auth']);
$routes->get('/katrol/7', 'Katrol::katrol7', ['Filter' => 'auth']);
$routes->get('/katrol/test', 'Katrol::test', ['Filter' => 'auth']);

// Roda
$routes->get('/roda/1', 'Roda::roda1', ['Filter' => 'auth']);
$routes->get('/roda/2', 'Roda::roda2', ['Filter' => 'auth']);
$routes->get('/roda/3', 'Roda::roda3', ['Filter' => 'auth']);
$routes->get('/roda/4', 'Roda::roda4', ['Filter' => 'auth']);
$routes->get('/roda/5', 'Roda::roda5', ['Filter' => 'auth']);
$routes->get('/roda/6', 'Roda::roda6', ['Filter' => 'auth']);
$routes->get('/roda/test', 'Roda::test', ['Filter' => 'auth']);

// Usaha
$routes->get('/gaya/1', 'Gaya::gaya1', ['Filter' => 'auth']);
$routes->get('/gaya/2', 'Gaya::gaya2', ['Filter' => 'auth']);
$routes->get('/gaya/3', 'Gaya::gaya3', ['Filter' => 'auth']);
$routes->get('/gaya/4', 'Gaya::gaya4', ['Filter' => 'auth']);
$routes->get('/gaya/5', 'Gaya::gaya5', ['Filter' => 'auth']);
$routes->get('/gaya/6', 'Gaya::gaya6', ['Filter' => 'auth']);
$routes->get('/gaya/7', 'Gaya::gaya7', ['Filter' => 'auth']);
$routes->get('/gaya/8', 'Gaya::gaya8', ['Filter' => 'auth']);
$routes->get('/gaya/9', 'Gaya::gaya9', ['Filter' => 'auth']);
$routes->get('/gaya/test', 'Gaya::test', ['Filter' => 'auth']);


$routes->get('/datauser/create', 'Datauser::create', ['Filter' => 'auth']);
$routes->delete('/datauser/(:num)', 'Datauser::delete/$1', ['Filter' => 'auth']);

$routes->get('/datamateri/create', 'Datamateri::create', ['Filter' => 'auth']);
$routes->delete('/datamateri/(:num)', 'Datamateri::delete/$1', ['Filter' => 'auth']);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
