<?php
require 'DBconnect.php';
require 'session.php';
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
$f3->route('GET @aboutus: /aboutus', 'PageController->AboutUs');
$f3->route('GET @termsandconditions: /TermsAndConditions', 'PageController->TermsAndConditions');
$f3->route('GET @faq: /FAQ', 'PageController->FAQ');
$f3->route('GET @createaccount: /login', 'PageController->login');
$f3->route('GET @myaccount: /myaccount', 'PageController->account');


/**
 * Categories CRUD
 */
$f3->route('GET @catRead: /categories', 'CategoryController->listing');

/**
 * Brands CRUD
 */
$f3->route('GET @brandRead: /brands', 'BrandController->listing');

/**
 * Age Ranges CRUD
 */
$f3->route('GET @ageRangeRead: /ages', 'AgeRangeController->listing');

/**
 * Cart CRUD
 */
$f3->route('GET @cartRead: /cart', 'CartController->displayCart');

$f3->route('POST @cartPost: /add-to-cart', 'CartController->addToCart');
$f3->route('POST @checkoutPost: /checkout', 'CartController->checkout');

$f3->route('GET @cartEmptyCart: /cart-empty', 'CartController->emptyCart');

/**
 * Login CRUD
 */
$f3->route('GET @loginRead: /login', 'PageController->login');

$f3->route('POST @loginUpdate: /update/@login', 'LoginController->loginSave');

/**
 * Sign Up CRUD
 */
// $f3->route('GET @signUpRead: /create-account', 'SignUpController->signUp');

$f3->route('GET @signUpCreate: /create-account', 'SignUpController->add');
$f3->route('POST @signUpCreate: /create-account', 'SignUpController->addSave');

/**
 * Toys CRUD
 */
$f3->route('GET @toyRead: /toys', 'ToyController->listing');
$f3->route('GET @toyReadCategories: /toys-category', 'ToyController->categoryListing');
$f3->route('GET @toyReadBrands: /toys-brand', 'ToyController->brandListing');
$f3->route('GET @toyReadAgeRanges: /toys-age-range', 'ToyController->ageRangeListing');

/**
 * Admin CRUD
 */
$f3->route('GET @adminRead: /admin', 'AdminController->addToys');
$f3->route('POST @adminCreate: /admin', 'AdminController->addSave');

$f3->route('GET @adminModify: /admin-modify', 'AdminController->updateUser');
$f3->route('POST @adminModify: /admin-modify', 'AdminController->updateSave');


// start the framework
$f3->run();


?>