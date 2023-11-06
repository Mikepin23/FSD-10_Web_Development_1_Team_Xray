<?php 

/**
 * Logic for Login
 */
class LoginController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Login();

		$this->f3->set('pageTitle', "Login | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message
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