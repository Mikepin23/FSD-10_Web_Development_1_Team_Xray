<?php 

/**
 * Logic for categories
 */
class AdminController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Intance of fat free framwwork
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new SignUp();

		$this->f3->set('pageTitle', "Admin Page | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
	}

	/**
	 * Displays form to create a new
	 */
	public function addToys($f3){

		//set default values
			//TODO undefined variables in template 
		$this->f3->set('toys', ['ToysID'=>'', 'ToyName'=>'', 'Price'=>'', 'Stock'=>'', 'ToyImage'=>'', 'BrandID'=>'', 'AgeRangeID'=>'', 'CategoryID'=>''] );

		//show the view
		echo Template::instance()->render('admin.html');

	}

	/**
	 * Validate and created the date of a new cateogory
	 */
	public function addSave($f3){
		error_log("addSave method triggered"); // Check if this line is printed in the error log

		if ($this->validateForm()){ // data is good, save to db
			// save to db
			$this->model->addData();
			// reroute to the listing page
			$f3->reroute($f3->get('SERVER.HTTP_REFERER'));
	}

	}

		/**
	 * Displays form to update given cateogory
	 */
	public function update(){
		//get the id from the URL
		$getParamId = $this->f3->get('PARAMS.toys');

		// fetch data from db
		$dbResult = $this->model->getById( $getParamId );
		
		// TODO: check that dbResults actully contains something else reroute

		// set my category for the view
		$this->f3->set("toys", $dbResult);

		//show the view
		echo Template::instance()->render('adminModify.html');
	}

	/**
	 * Validate and updates the date of given cateogory
	 */
	public function updateSave($f3){
		if ($this->validateForm()){ // data is good, save to db
		
			// save to the db
			$this->model->updateData( $this->f3->get('PARAMS.toys'));

			// reroute to listing
			$f3->reroute($f3->get('SERVER.HTTP_REFERER'));

		}

	}

	/**
	 * Validate the data from the form after POST method
	 *
	 * @return boolean true if the form data is value
	 */
	 private function validateForm(){
	 	// TODO: validate better
	 	if ($this->f3->get('POST.ToyName') == ""){ //validate failed
	 		// setup error for view
	 		$this->f3->set('error', 'Toy Name is required');

	 		// populate my view
	 		$this->f3->set('toys', $this->f3->get('POST'));

	 		// show my view
	 		echo Template::instance()->render('admin.html');
	 		// we can still process and do stuff after a view is rendered
	 		return false;
	 	} 
	 	return true;
	 }
}