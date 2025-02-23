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
$routes->set404Override('App\Controllers\Page404::index');
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
$routes->get('/redirect/(:any)', 'Redirect::index/$1');

$routes->get('/', 'Home::index');
// signin and signup
$routes->get('/account/signin', 'SignIn::index');
$routes->get('/account/signup', 'SignUp::index');

$routes->post('/account/signup', 'SignUp::store');
$routes->post('/account/signin', 'SignIn::loginAuth');

$routes->get('/account/logout', 'LogOut::index');

// search 
$routes->get('/search', 'Search::index');
// collections
$routes->get('/collections', 'Collections::index');
$routes->get('/collections/(:any)', 'Collections::index/$1');
// detail products
$routes->get('/products/(:any)-(:any)', 'Products::index/$2');
$routes->post('/products/(:any)/addtocart', 'Products::addToCart/$1');
$routes->post('/products/(:any)/writereview', 'Products::writeReview/$1');
// cart
$routes->get('/cart', 'Cart::index');
$routes->post('/cart', 'Cart::updateCart');
$routes->get('/cart/delete', 'Cart::deleteCart');
$routes->get('/cart/clear', 'Cart::clearCart');
// CheckOut
$routes->get('/checkout', 'CheckOut::genner');
$routes->get('/checkout/(:any)', 'CheckOut::index/$1');
$routes->post('/checkout/(:any)', 'CheckOut::success/$1');
// Purchase
$routes->get('/purchase', 'Purchase::index', ['filter' => 'authGuard']);
$routes->get('/purchase/(:num)', 'Purchase::detail/$1', ['filter' => 'authGuard']);
$routes->post('/purchase/handel', 'Purchase::handel', ['filter' => 'authGuard']);
// 
// admin routes

$routes->get('/admin', 'Admin\Dashboard::index', ['filter' => 'authGuardAdmin']);
$routes->get('/admin/login', 'Admin\Login::index');
$routes->post('/admin/login', 'Admin\Login::loginAuth');

$routes->get('/admin/order', 'Admin\Table::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/order/handle', 'Admin\Table::handle', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/products', 'Admin\Products::index', ['filter' => 'authGuardAdmin']);
$routes->get('/admin/products/(:any)', 'Admin\Products::detail/$1', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/products/delete', 'Admin\Products::delete', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/products/(:any)/update', 'Admin\Products::update/$1', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/products/new/create', 'Admin\Products::create', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/banner', 'Admin\Banner::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/banner/update', 'Admin\Banner::update', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/subbanner', 'Admin\SubBanner::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/subbanner/update', 'Admin\SubBanner::update', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/category', 'Admin\Category::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/category/update', 'Admin\Category::update', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/kiotviet', 'Admin\KiotViet::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/kiotviet/update', 'Admin\KiotViet::update', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/redirect', 'Admin\Redirect::index', ['filter' => 'authGuardAdmin']);
$routes->post('/admin/redirect', 'Admin\Redirect::update', ['filter' => 'authGuardAdmin']);

$routes->get('/admin/logout', 'LogOut::admin');

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
