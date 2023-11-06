<?php 

/**
 * Logic for categories
 */
class CategoryController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Category();

		$this->f3->set('pageTitle', "Categories | ToyTower"); // default page title
		
	}

	/**
	 * Displays a listing of all the categories
	 */
	public function listing(){

		// fetch the categories from the db
		$categories = $this->model->all();

		// set the categories for the view
		$this->f3->set('categories', $categories);
		
		// show the view
		echo Template::instance()->render('categories.html');
		
	}
	
}