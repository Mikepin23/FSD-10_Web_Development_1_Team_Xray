<?php 

/**
 * Logic for ages
 */
class AgeRangeController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new AgeRange();

		$this->f3->set('pageTitle', "Ages | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message

	}

	/**
	 * Displays a listing of all the ages
	 */
	public function listing(){

		// fetch the ages from the db
		$ageRanges = $this->model->all();

		// set the ages for the view
		$this->f3->set('ageranges', $ageRanges);
		
		// show the view
		echo Template::instance()->render('ageRanges.html');
		
	}

}	