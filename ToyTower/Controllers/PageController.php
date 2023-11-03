<?php

/**
 * Handle pages without database connections
 */
class PageController {

	function homepage($f3){

		// Check if the 'user' session variable exists
		$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

		// Set the 'username' variable
		$f3->set('username', $user);

		// create template instance to show visual to users
		$f3->set("pageTitle", "Home | ToyTower");

		echo Template::instance()->render('homepage.html');

	}

	function categories($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Categories | ToyTower");

		echo Template::instance()->render('categories.html');

	}

	function brands($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Brands | ToyTower");

		echo Template::instance()->render('brands.html');

	}

  function cart($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Cart | ToyTower");

		echo Template::instance()->render('cart.html');

	}

	function login($f3){
    $session = $f3->get('SESSION');
    if (isset($session['user'])) {
        $username = $session['user'];
        $f3->set('username', $username);
    }

		// create template instance to show visual to users
		$f3->set("pageTitle", "Login | ToyTower");

		echo Template::instance()->render('login.html');

	}

	function signUp($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Create Account | ToyTower");

		echo Template::instance()->render('createAccount.html');

	}
  
/*
	function about($f3){
		// echo "About Me.. Hello";
		$f3->set("pageTitle", "All About Me");
		echo Template::instance()->render('about.html');
	}

	function aboutPost(){
		echo "Post method used";
	}

	function userData($f3, $params){
		echo "User id: " . $f3->get("PARAMS.uid") . "<br>";
		echo "User id: " . $params['uid'];
	}
*/

}