<?php 

/**
 * Logic for cart
 */
class CartController{

	private $model; // db access
	private $modelToy;
	private $f3; // framework instance

	/**
	 * @param object $f3Var Instance of Fat-Free Framework
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Cart();
		$this->modelToy = new Toy();

		$this->f3->set('pageTitle', "Cart | ToyTower"); // default page title
		$this->f3->set('error', ""); //default error message

	}

	public function addToCart($f3) {
    // Retrieve the ToysID from the POST data sent to the server
    $item = $f3->get('POST.toysID'); 
    
    // Create an instance of the Cart class
    $cartModel = new Cart();
    
    // Call the addToCart method of the Cart class and pass the $item as a parameter
    $cartModel->addToCart($item);
    
    // Re-route to the page you were just on
    $f3->reroute($f3->get('SERVER.HTTP_REFERER'));
}



public function displayCart($f3) {

	// if the cart session is not set initialize as an empty array
	if( !isset( $_SESSION['cart'] ) ) {
		$_SESSION['cart'] = [];
	} 
	
	// Declaring variable $itemIDs to equal the array keys in the cart which is in the session
	// The array keys correspond to: ToysID in the cart
	$itemIDs = array_keys($_SESSION['cart']);

	// Database Connection
	$db = new DB\SQL('mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');

	// db_data is an array of dictionaries, where each dictionary is a row in the db
	$query_str = "SELECT * FROM toys where ToysID IN ('" . implode("','", $itemIDs) . "')";
	$db_data = $db->exec($query_str);

	$subtotal = 0;

	// for loop: Iterating through the rows of db_data which come from the db
	for ($i = 0; $i < count($db_data); $i++) {
		// variable $toy_id is given the value of the ToysID for that row
		$toy_id = $db_data[$i]['ToysID'];
		// $db_data at its index is set to the quantity fetched from the cart associated with the ToysId
		$db_data[$i]['quantity'] = $_SESSION['cart'][$toy_id];
		$subtotal += $db_data[$i]['quantity'] * $db_data[$i]['Price'];
	}
	// calculations for the cart display
	number_format((float)$subtotal, 2, '.', '');

	$this->f3->set('subtotal', number_format((float)$subtotal, 2, '.', ''));
	$this->f3->set('shipping_cost', number_format((float)20, 2, '.', ''));
	$this->f3->set('total_price', number_format((float)($subtotal + 20) * 1.15, 2, '.', ''));
	$this->f3->set('item', $db_data);

	// show the view
	echo \Template::instance()->render('cart.html');

}

public function checkout($f3) {

	// Database Connection
	$db = new DB\SQL('mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');


		// Loop through items in the cart and update the amount of stock in the database
	for ($i = 0; $i < count($_SESSION['cart']); $i++) {
		$toys_id = array_keys($_SESSION['cart'])[$i];
		$query_str = "UPDATE toys set Stock = Stock - " . $_SESSION['cart'][$toys_id] . " where ToysID = '" . $toys_id . "'";
		$db->exec($query_str);
	}

	// re-initialize the cart session to an empty array
	$_SESSION['cart'] = [];

	// re-route to the same page
	$f3->reroute($f3->get('SERVER.HTTP_REFERER'));
	
}

public function emptyCart($f3) {
	// if the cart session is set, re-initialize it to an empty array
	if( isset( $_SESSION['cart'] ) ) {
		$_SESSION['cart'] = [];

		// re-route to the same page
		$f3->reroute($f3->get('SERVER.HTTP_REFERER'));
	} 
}

}