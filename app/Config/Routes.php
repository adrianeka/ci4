<?php

use App\Controllers\Barang;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::display');
$routes->get('/', 'CLogin::index');
$routes->get('/Coba', 'Coba::display');
$routes->get('/Mhs', 'Mahasiswa::display');
$routes->get('/Brg', 'Barang::index');
$routes->get('/Brg/delete/(:any)', 'Barang::delete/$1');
$routes->post('/Brg/search', 'Barang::search');
$routes->get('Brg/create', 'Barang::create');
$routes->post('Brg/store', 'Barang::store');
$routes->get('Brg/edit/(:any)', 'Barang::edit/$1');
$routes->post('Brg/update', 'Barang::update');

$routes->group('', ['filter' => 'loginfilter'], function ($routes) {
    $routes->get('/template', function () {
        return view('v_template');
    });
    $routes->get('/info', 'CInfo::index');
    $routes->get('/home', 'CHome::index');
    $routes->get('/barang', 'CBarang::index', ['filter' => 'loginfilter']);
    $routes->post('/barang/search', 'CBarang::search');
    $routes->get('/barang/detail/(:any)', 'CBarang::detail/$1');
    $routes->get('/barang/inputForm', 'CBarang::create');
    $routes->post('/barang/input', 'CBarang::store');
});
$routes->post('/authentication', 'CLogin::authenticate');
$routes->get('/logout', 'CLogin::logout');



// $routes->get('/formValidation', 'Home::formValidation');

// $routes->post('/validation', 'Home::submitForm');