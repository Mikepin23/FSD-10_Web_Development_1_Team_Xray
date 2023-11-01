<?php 

/**
 * Logic for categories
 */
class CategoryController{

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object
	 */
	// public function __construct($f3Var){

	// 	$this->f3 = $f3Var;
	// 	$this->model = new Category();

	// 	$this->f3->set('pageTitle', "Categories");
	// 	$this->f3->set('error', "");
	// }

	/**
	 * Displays a listing of all the categories
	 */
	public function listing(){

		// fetch the categories from the db
		$categories = $this->model->all();

		// set my category for the view
		$this->f3->set('categories', $categories);
		
		// show the view
		echo Template::instance()->render('categories/listing.html');
		
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

	function redirectBasedOnPost() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // The form has been submitted
        // Check which button was clicked and redirect accordingly
        if (isset($_POST['categories'])) {
            header("Location: http://localhost/ToyTower2/Website/categories.php");
        } elseif (isset($_POST['popularBrands'])) {
            header("Location: http://localhost/ToyTower2/Website/brands.html");
        } elseif (isset($_POST['topToys'])) {
            header("Location: http://localhost/ToyTower2/Website/toys.html");
        } elseif (isset($_POST['deals'])) {
            header("Location: https://www.example4.com");
        } elseif (isset($_POST['logo_clicked'])) {
					header("Location: http://localhost/ToyTower2/Website/homepage.html");
				} elseif (isset($_POST['cart_clicked'])) {
					header("Location: http://localhost/ToyTower2/Website/cart.html");
				} elseif (isset($_POST['login_clicked'])) {
					header("Location: http://localhost/ToyTower2/Website/login.html");
				} elseif (isset($_POST['signup_clicked'])) {
					header("Location: http://localhost/ToyTower2/Website/createAccount.html");
				}



        exit();
    	}
	}	
}
