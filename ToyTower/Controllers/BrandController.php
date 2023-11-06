<?php 

/**
 * Logic for brands
 */
class BrandController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Brand();

		$this->f3->set('pageTitle', "Brands | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
		
	}

	/**
	 * Displays a listing of all the brands
	 */
	public function listing(){

		// fetch the brands from the db
		$brands = $this->model->all();

		// set the brands for the view
		$this->f3->set('brands', $brands);
		
		// show the view
		echo Template::instance()->render('brands.html');
		
	}

}