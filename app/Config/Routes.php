<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rute untuk login dan registrasi
$routes->get('/login', 'UserController::login'); // Halaman login
$routes->post('/login', 'UserController::authenticate'); // Proses login
$routes->get('/register', 'UserController::register'); // Halaman registrasi
$routes->post('/register', 'UserController::save'); // Proses registrasi

// Rute untuk dashboard dan user-related actions
$routes->get('/user/dashboard', 'UserController::dashboard'); // Halaman dashboard
$routes->get('/user/logout', 'UserController::logout'); // Proses logout
$routes->get('/user/editProfile', 'UserController::editProfile'); // Halaman edit profil
$routes->post('/user/updateProfile', 'UserController::updateProfile'); // Proses update profil

// Rute admin (jika diperlukan)
$routes->get('/admin/dashboard', 'AdminController::index'); // Halaman dashboard admin
$routes->get('/admin/manage-users', 'AdminController::manageUsers'); // Halaman pengelolaan user
$routes->get('/admin/edit-profile', 'AdminController::editProfile'); // Halaman edit profil admin

// Rute untuk success message setelah registrasi
$routes->get('/user/success', function () {
    return view('user/success');
});
