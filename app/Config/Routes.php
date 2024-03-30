<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/turma', 'Home::turma');
$routes->post('/save-turma', 'Home::saveTurma');
$routes->post('/update-turma/(:num)', 'Home::updateTurma/$1');
$routes->get('/delete-turma/(:num)', 'Home::deleteTurma/$1');


// Routing untuk Materi
$routes->get('/materi', 'Home::materi');
$routes->post('/save-materi', 'Home::saveMateri');
$routes->post('/update-materi/(:num)', 'Home::updateMateri/$1');
$routes->get('/delete-materi/(:num)', 'Home::deleteMateri/$1');



// Routing untuk Siswa
$routes->get('/siswa', 'Home::siswa');
$routes->post('/save-siswa', 'Home::saveSiswa');
$routes->post('/update-siswa/(:num)', 'Home::updateSiswa/$1');
$routes->get('/delete-siswa/(:num)', 'Home::deleteSiswa/$1');

$routes->setAutoRoute(true);