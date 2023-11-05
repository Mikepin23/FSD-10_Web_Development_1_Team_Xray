<?php 

/**
 * Logic for categories
 */
class BrandController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of fat free framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Brand();

		$this->f3->set('pageTitle', "Brands | ToyTower"); // default page title
		
	}

	/**
	 * Displays a listing of all the brands
	 */
	public function listing(){

		// fetch the categories from the db
		$brands = $this->model->all();

		// set my category for the view
		$this->f3->set('brands', $brands);
		
		// show the view
		echo Template::instance()->render('brands.html');
		
	}

}