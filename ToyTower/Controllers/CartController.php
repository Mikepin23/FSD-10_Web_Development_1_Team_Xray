<?php 

/**
 * Logic for categories
 */
class CartController{

	private $model; // db access
	private $modelToy;
	private $f3; // framework instance

	/**
	 * @param object $f3Var Intance of fat free framwwork
	 */
	public function __construct($f3Var){

		$this->f3 = $f3Var; // f3 instance
		$this->model = new Cart();
		$this->modelToy = new Toy();

		$this->f3->set('pageTitle', "Cart | ToyTower"); // default page title

	}

	public function addToCart($f3) {
		$item = $f3->get('POST.toysID'); 
		$cartModel = new Cart();
		$cartModel->addToCart($item);
		$f3->reroute($f3->get('SERVER.HTTP_REFERER'));
	}


public function displayCart($f3) {

	if( !isset( $_SESSION['cart'] ) ) {
		$_SESSION['cart'] = [];
	} 
	
	// Declaring variable $itemIDs to equal the array keys in the cart which is in the session
	// The array keys correspond to: ToysID in the cart
	$itemIDs = array_keys($_SESSION['cart']);

	// Database Connection
	$db = new DB\SQL(
		 'mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');
	// Fetch toys based on the specified categoryID from the database
	// Example: SELECT * FROM toys where ToysID IN ('1','2','3')

	// db_data is an array of dictionaries, where each dictionary is a row in the db
	$query_str = "SELECT * FROM toys where ToysID IN ('" . implode("','", $itemIDs) . "')";
	$db_data = $db->exec($query_str);


	// for loop: Iterating through the rows of db_data which come from the db
	$subtotal = 0;
	for ($i = 0; $i < count($db_data); $i++) {
		// variable $toy_id is given the value of the ToysID for that row
		$toy_id = $db_data[$i]['ToysID'];
		// $db_data at its index is set to the quantity fetched from the cart associated with the ToysId
		$db_data[$i]['quantity'] = $_SESSION['cart'][$toy_id];
		$subtotal += $db_data[$i]['quantity'] * $db_data[$i]['Price'];
	}
	number_format((float)$subtotal, 2, '.', '');

	$this->f3->set('subtotal', number_format((float)$subtotal, 2, '.', ''));
	$this->f3->set('shipping_cost', number_format((float)20, 2, '.', ''));
	$this->f3->set('total_price', number_format((float)($subtotal + 20) * 1.15, 2, '.', ''));
	$this->f3->set('item', $db_data);
	echo \Template::instance()->render('cart.html');

}

public function checkout($f3) {

	// $this->displayCart($f3);

	// Database Connection
	$db = new DB\SQL(
		'mysql:host=localhost;port=3304;dbname=fsd10_xray;charset=UTF8', 'fsduser', 'myDBpw');
	
	echo "<br>";
	print_r($_SESSION['cart']);
	echo "<br>";
	echo "<br>";
	echo "<br>";

	for ($i = 0; $i < count($_SESSION['cart']); $i++) {
		$toys_id = array_keys($_SESSION['cart'])[$i];
		$query_str = "UPDATE toys set Stock = Stock - " . $_SESSION['cart'][$toys_id] . " where ToysID = '" . $toys_id . "'";
		print_r($query_str);
		echo "<br>";
		$db->exec($query_str);
	}
	echo "<br>";
	echo "<br>";

	$_SESSION['cart'] = [];
	// $db_data = $db->exec($query_str);

	$f3->reroute($f3->get('SERVER.HTTP_REFERER'));
	
}


}