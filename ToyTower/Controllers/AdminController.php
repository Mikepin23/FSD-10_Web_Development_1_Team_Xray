<?php 

/**
 * Logic for Login
 */
class AdminController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Intance of fat free framwwork
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Login();

		$this->f3->set('pageTitle', "Admin | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
	}


	/**
	 * Displays form to update given cateogory
	 */
	public function login(){
		
    echo "You are at the admin page";
	}

	/**
	 * Validate and updates the date of given cateogory
	 */
	public function updateSave(){
		if ($this->validateForm()){ // data is good, save to db
		
			// save to the db
			$this->model->updateData( $this->f3->get('PARAMS.cat'));

			// reroute to listing
			$this->f3->reroute('@catRead');

		}

	}

	/**
	 * Displays form to create a new
	 */
	public function add(){

		//set default values
			//TODO undefined variables in template 
		$this->f3->set('category', ['category_id'=>'', 'name'=>''] );

		//show the view
		echo Template::instance()->render('categories/form.html');

	}

	/**
	 * Validate and created the date of a new cateogory
	 */
	public function addSave(){
		if ($this->validateForm()){ // data is good, save to db
			// save to db
			$this->model->addData();
			// reroute to the listing page
			$this->f3->reroute('@catRead');
		}

	}

	/**
	 * Delete a given catagory
	 */
	public function delete(){
		// TODO verification with user "Are you sure..."

		// delete the record in the db
		$this->model->deleteData( $this->f3->get('PARAMS.cat') );

		// reroute the listing page
		$this->f3->reroute('@catRead');
	}

	/**
	 * Validate the data from the form after POST method
	 *
	 * @return boolean true if the form data is value
	 */
	private function validateForm(){
		// TODO: validate better
		if ($this->f3->get('POST.name') == ""){ //validate failed
			// setup error for view
			$this->f3->set('error', 'Name is required');

			// populate my view
			$this->f3->set('category', $this->f3->get('POST'));

			// show my view
			echo Template::instance()->render('categories/form.html');
			// we can still process and do stuff after a view is rendered
			return false;
		} 
		return true;
	}
}