<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/viewkriteria', 'home::viewkriteria');
$routes->get('/Home/viewalternatif', 'home::viewalternatif');
// Alternatif
$routes->post('Home/update_data/(:num)', 'Home::update_data/$1');
$routes->get('/Home/formedit/(:num)', 'Home::formedit/$1');
$routes->get('/Home/delete/(:num)', 'Home::delete/$1');
$routes->post('Home/simpanA', 'Home::simpanA');
$routes->get('Home/forminputmhs', 'Home::forminputmhs');
//Kriteria
$routes->get('/Home/forminputkriteria', 'Home::forminputkriteria'); // Form tambah data kriteria
$routes->post('/Home/simpanK', 'Home::simpanK'); // Menyimpan data kriteria
$routes->post('/Home/updateK/(:segment)', 'Home::updateK/$1');
$routes->get('/Home/EditK/(:segment)', 'Home::EditK/$1');
$routes->get('/Home/deleteK/(:segment)', 'Home::deleteK/$1');
//KONVERSI
$routes->get('/Home/viewkonversi', 'Home::viewkonversi');
$routes->get('Home/forminputKN', 'Home::forminputKN'); // Rute GET untuk menampilkan form input
$routes->post('Home/simpanKN', 'Home::simpanKN'); 
$routes->get('/Home/deleteKN/(:num)', 'Home::deleteKN/$1');
$routes->get('/Home/formUpdateKN/(:num)', 'Home::formUpdateKN/$1');
$routes->post('/Home/updateKN', 'Home::updateKN');



$routes->get('/Home/viewnormalisasi', 'home::viewnormalisasi');
$routes->get('/Home/viewbobot', 'home::viewbobot');
$routes->get('/Home/viewhasil', 'home::viewhasil');
$routes->get('/Home/viewrangking', 'home::viewrangking');
