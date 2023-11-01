<?php 

/**
 * Logic for categories
 */
class ToyController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of fat free framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Toy();

		$this->f3->set('pageTitle', "Toys | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
	}

	/**
	 * Displays a listing of all the toys
	 */
	public function listing(){

		// fetch the categories from the db
		$toys = $this->model->all();

		// set my category for the view
		$this->f3->set('toys', $toys);
		
		// show the view
		echo Template::instance()->render('toys.html');
		
	}

}

?>