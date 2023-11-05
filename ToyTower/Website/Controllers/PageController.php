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

<<<<<<< Updated upstream:ToyTower/Website/Controllers/PageController.php
=======
	function AboutUs ($f3){

	// create template instance to show visual to users
	$f3->set("pageTitle", "AboutUs | ToyTower");

	echo Template::instance()->render('aboutus.html');


	}

	function TermsAndConditions ($f3){

		// create template instance to show visual to users
		$f3->set("pageTitle", "TermsAndConditions | ToyTower");
	
		echo Template::instance()->render('termsandconditions.html');
	
	
		}

		function FAQ ($f3){

			// create template instance to show visual to users
			$f3->set("pageTitle", "FAQ | ToyTower");
		
			echo Template::instance()->render('faq.html');
		
		
		}

		function account ($f3){

			// create template instance to show visual to users
			$f3->set("pageTitle", "myaccount | ToyTower");
		
			echo Template::instance()->render('account.html');
		
		
		}

		public function searchbar($f3){

			// fetch the categories from the db
			$categories = $this->model->all();
	
			// Fetch toys based on the search query in brandname
      $toys = $conn->query("SELECT * FROM toys WHERE brandname LIKE '%$searchQuery%'");

			if ($toys === false) {
  			die("Error executing query: " . $conn->error);
			}

      // Pass the filtered toys to the view
      $f3->set('toys', $toys);

			// set my category for the view
			$this->f3->set('categories', $categories);
			
			// show the view
			echo Template::instance()->render('categories/listing.html');
			
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

>>>>>>> Stashed changes:ToyTower/Controllers/PageController.php
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