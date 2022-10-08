<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/web', 'Home::web');

// CRUD RESTful Routes
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::updateUser');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');



$routes->group('manage', static function ($routes) {
    // login form 
    $routes->get('', 'Manage::login');
    $routes->get('signup', 'Manage::sign_up');
    $routes->get('forget-password', 'Manage::forget_password');
    $routes->get('logout', 'Manage::logout');
    $routes->group('(:num)', /*['filter'=>'route-filter'],*/ static function ($userRoutes) {
        // user dashboard 
        $userRoutes->get('', 'Manage::dashboard');
        $userRoutes->get('dashboard', 'Manage::dashboard');
        $userRoutes->get('users', 'Manage::users');
    });

    $routes->group('api', static function ($apiRoute) {
        $apiRoute->get('loginAuth','ManageAPI::loginAuth');
        $apiRoute->post('loginAuth','ManageAPI::loginAuth');
    });
});
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
