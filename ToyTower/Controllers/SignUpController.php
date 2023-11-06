<?php 

/**
 * Logic for Create Account
 */
class SignUpController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new SignUp();

		$this->f3->set('pageTitle', "Create Account | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
	}

	/**
	 * Displays form to create a new
	 */
	public function add($f3){

		//set default values
		$this->f3->set('createAccount', ['UserID'=>'', 'Username'=>'', 'UserPass'=>'', 'UserFN'=>'', 'UserLN'=>'', 'UserEmail'=>'', 'Phone'=>'', 'PostalCode'=>''] );

		//show the view
		echo Template::instance()->render('createAccount.html');

	}

	/**
	 * Validate and created the date of a new user
	 */
	public function addSave(){
		if ($this->validateForm()){ // data is good, save to db
			// save to db
			$this->model->addData();
			// re-route to the home page
			$this->f3->reroute('@home');
	}

	}

	/**
	 * Validate the data from the form after POST method
	 *
	 * @return boolean true if the form data is value
	 */
	private function validateForm(){
		// TODO: validate better
		if ($this->f3->get('POST.Username') == ""){ //validate failed
			// setup error for view
			$this->f3->set('error', 'Username is required');

			// populate my view
			$this->f3->set('createAccount', $this->f3->get('POST'));

			// show my view
			echo Template::instance()->render('createAccount.html');
			// we can still process and do stuff after a view is rendered
			return false;
		} 
		return true;
	}
}