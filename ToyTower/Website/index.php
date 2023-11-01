<?php
//TODO:  fix alias prefix

// will automatically load any library required from our composer
require "vendor/autoload.php";

// load framework
$f3 = Base::instance();

// framework to automatically load the classes within these folders
$f3->set('AUTOLOAD', 'Controllers/|Models/');

// framework to automatically load templates(view) from here
$f3->set('UI', 'Views/');

// routes using /Controller classes
$f3->route('GET @home: /', 'PageController->homepage');


/**
 * Categories CRUD
 */
$f3->route('GET @catRead: /categories', 'CategoryController->listing');

$f3->route('GET @catUpdate: /update/@cat', 'CategoryController->update');
$f3->route('POST @catUpdate: /update/@cat', 'CategoryController->updateSave');

// $f3->route('GET @catCreate: /add', 'CategoryController->add');
// $f3->route('POST @catCreate: /add', 'CategoryController->addSave');

/***** $f3->route('GET @catDelete: /delete/@cat', 'CategoryController->delete'); *****/
// we should implement a deletion validation and POST to actually delete

/**
 * Brands CRUD
 */
$f3->route('GET @brandRead: /brands', 'BrandController->listing');

$f3->route('GET @brandUpdate: /update/@brands', 'BrandController->update');
$f3->route('POST @brandUpdate: /update/@brands', 'BrandController->updateSave');

// $f3->route('GET @brandCreate: /add', 'BrandController->add');
// $f3->route('POST @brandCreate: /add', 'BrandController->addSave');

/**
 * Cart CRUD
 */
$f3->route('GET @cartRead: /cart', 'PageController->cart');

$f3->route('GET @cartCreate: /add', 'CartController->add');
$f3->route('POST @cartCreate: /add', 'CartController->addSave');

$f3->route('GET @cartUpdate: /update/@cart', 'CartController->update');
$f3->route('POST @cartUpdate: /update/@cart', 'CartController->updateSave');

$f3->route('GET @cartDelete: /delete/@cart', 'CartController->delete');
// we should implement a deletion validation and POST to actually delete

/**
 * Login CRUD
 */
$f3->route('GET @loginRead: /login', 'PageController->login');

$f3->route('GET @loginUpdate: /update/@login', 'LoginController->update');
$f3->route('POST @loginUpdate: /update/@login', 'LoginController->updateSave');

/**
 * Sign Up CRUD
 */
$f3->route('GET @signUpRead: /create-account', 'PageController->signUp');

$f3->route('GET @signUpCreate: /add', 'SignUpController->add');
$f3->route('POST @signUpCreate: /add', 'SignUpController->addSave');

/**
 * Toys CRUD
 */
$f3->route('GET @toyRead: /toys', 'ToyController->listing');

// start the framework
$f3->run();


?>