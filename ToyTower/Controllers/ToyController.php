<?php 

/**
 * Logic for toys
 */
class ToyController {

	private $model; // db access
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Toy();

		$this->f3->set('pageTitle', "Toys | ToyTower"); // default page title
	}

	/**
	 * Displays a listing of all the toys
	 */
	 public function listing(){

	 	// fetch the toys from the db
	 	$toys = $this->model->all();

	 	// set my toys for the view
	 	$this->f3->set('toys', $toys);
		
	 	// show the view
	 	echo Template::instance()->render('toys.html');
		
	 }

   
   public function categoryListing($f3) {
    // Get the categoryID from the query parameter
    $categoryID = $f3->get('GET.categoryID');

    // Database Connection
    $db = new DB\SQL('mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');

    // Fetch toys based on the specified categoryID from the database
    $toys = $db->exec('SELECT * FROM toys WHERE CategoryID = ?', $categoryID);

    // Pass the filtered toys to the view
    $f3->set('toys', $toys);

    // Render the view 
    echo \Template::instance()->render('toys.html');
}

public function brandListing($f3) {
  // Get the BrandID from the query parameter
  $brandID = $f3->get('GET.brandID');
  
    // Database Connection
  $db = new DB\SQL('mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');

  // Fetch toys based on the specified BrandID from the database
  $toys = $db->exec('SELECT * FROM toys WHERE BrandID = ?', $brandID);

  // Pass the filtered toys to the view
  $f3->set('toys', $toys);

  // Render the view 
  echo \Template::instance()->render('toys.html');
}

public function ageRangeListing($f3) {
  // Get the AgeRangeID from the query parameter
  $ageRangeID = $f3->get('GET.ageRangeID');

  // Database Connection
  $db = new DB\SQL('mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');

  // Fetch toys based on the specified AgeRangeID from the database
  $toys = $db->exec('SELECT * FROM toys WHERE AgeRangeID = ?', $ageRangeID);

  // Pass the filtered toys to the view
  $f3->set('toys', $toys);

  // Render the view 
  echo \Template::instance()->render('toys.html');
}

}

?>