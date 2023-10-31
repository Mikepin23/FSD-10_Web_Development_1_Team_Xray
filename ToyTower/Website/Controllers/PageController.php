<?php

/**
 * Handle pages without database connections
 */
class PageController{

	function homepage($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Home | ToyTower");

		echo Template::instance()->render('homepage.html');

	}

  function cart($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Cart | ToyTower");

		echo Template::instance()->render('cart.html');

	}

	function login($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "Login | ToyTower");

		echo Template::instance()->render('login.html');

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