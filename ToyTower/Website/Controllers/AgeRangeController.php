<?php 

/**
 * Logic for categories
 */
class AgeRangeController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of fat free framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new AgeRange();

		$this->f3->set('pageTitle', "Ages | ToyTower"); // default page title

	}

	/**
	 * Displays a listing of all the brands
	 */
	public function listing(){

		// fetch the categories from the db
		$ageRanges = $this->model->all();

		// set my category for the view
		$this->f3->set('ageranges', $ageRanges);
		
		// show the view
		echo Template::instance()->render('ageRanges.html');
		
	}

}	