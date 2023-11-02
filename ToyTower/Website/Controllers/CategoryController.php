<?php 

/**
 * Logic for categories
 */
class CategoryController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Intance of fat free framwwork
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

		// set my category for the view
		$this->f3->set('categories', $categories);
		
		// show the view
		echo Template::instance()->render('categories.html');
		
	}

	/**
	 * Displays form to update given cateogory
	 */
	public function update(){
		//get the id from the URL
		$getParamId = $this->f3->get('PARAMS.cat');

		// fetch data from db
		$dbResult = $this->model->getById( $getParamId );
		
		// TODO: check that dbResults actully contains something else reroute

		// set my category for the view
		$this->f3->set("category", $dbResult);

		//show the view
		echo Template::instance()->render('categories/form.html');
	}

}