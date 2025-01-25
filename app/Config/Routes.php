<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->get('/register', 'AuthController::register'); // Halaman registrasi
$routes->post('/registerProcess', 'AuthController::registerProcess');
$routes->get('/logout', 'AuthController::logout');

// Routes configuration
$routes->group('admin', ['filter' => 'role:admin'], function($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    // Tambahkan rute lainnya untuk admin di sini
    $routes->get('profile', 'AccountController::profile');
    $routes->get('change-password', 'AccountController::changePassword');
    $routes->get('logout', 'AccountController::logout');
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('data-pendaftaran', 'DataController::pendaftaran');
    $routes->get('data', 'DataController::dataLain');
    $routes->get('cetak-bukti-pendaftaran', 'CetakController::buktiPendaftaran');
    $routes->post('update-password', 'AccountController::updatePassword');
    


});

$routes->group('user', ['filter' => 'role:user'], function($routes) {
    $routes->get('dashboard', 'UserController::dashboard');
    $routes->get('registerForm', 'UserController::registerForm'); // Halaman formulir pendaftaran
    $routes->post('register', 'PendaftaranController::store');

    // Tambahkan rute lainnya untuk user di sini
});



// // Rute untuk login dan registrasi
// $routes->get('/login', 'AuthController::login'); // Halaman login
// $routes->post('/login', 'AuthController::loginProcess'); // Proses login
// $routes->get('/register', 'AuthController::register'); // Halaman registrasi
// $routes->post('/register', 'AuthController::registerProcess'); // Proses registrasi

// // Rute untuk dashboard dan user-related actions
// $routes->get('/user/dashboard', 'UserController::dashboard'); // Halaman dashboard
// $routes->get('/user/logout', 'AuthController::logout'); // Proses logout
// $routes->get('/user/editProfile', 'UserController::editProfile'); // Halaman edit profil
// $routes->post('/user/updateProfile', 'UserController::updateProfile'); // Proses update profil

// // Rute admin (jika diperlukan)
// $routes->get('/admin/dashboard', 'AdminController::index'); // Halaman dashboard admin
// $routes->get('/admin/manage-users', 'AdminController::manageUsers'); // Halaman pengelolaan user
// $routes->get('/admin/edit-profile', 'AdminController::editProfile'); // Halaman edit profil admin
// $routes->post('/admin/update-profile', 'AdminController::updateProfile'); // Proses update profil admin

// // Rute untuk success message setelah registrasi
// $routes->get('/user/success', function () {
//     return view('user/success');
// });

// $routes->get('/user/register', 'UserController::registerForm'); // Formulir pendaftaran
// $routes->post('/user/submit-registration', 'UserController::submitRegistration'); // Proses pendaftaran
// $routes->get('/user/payment-receipt', 'UserController::paymentReceipt'); // Cetak bukti pembayaran
// $routes->get('/user/editProfile', 'UserController::editProfile'); // Edit profil
// $routes->post('/user/updateProfile', 'UserController::updateProfile'); // Update profil

// // Rute untuk registerForm
// $routes->get('/registerForm', 'UserController::registerForm'); // Halaman formulir pendaftaran

// $routes->get('/login', 'AuthController::login'); // Halaman login
// $routes->post('/login', 'AuthController::loginProcess'); // Proses login
