<?php 

class Cart extends Model{

	public function __construct(){
		// setup db model to use the toys table
		parent::__construct('toys');
	}

	public function addToCart($item) {
    // Check if the cart session is not set, initialize it as an empty array
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // If the item is not in the cart, initialize its quantity to 0
    if (!isset($_SESSION['cart'][$item])) {
        $_SESSION['cart'][$item] = 0;
    }

    // Retrieve information about the item from the database using its ToysID
    $val = $this->findone(['ToysID=?', $item]);

    // Check if the available stock is less than the quantity in the cart + 1
    if ($val['Stock'] < $_SESSION['cart'][$item] + 1) {
        // Display an error message 
        print_r('Error'); // TODO: javascript alert that there is no stock available

        // If the quantity in the cart is already 0, remove the item from the cart
        if ($_SESSION['cart'][$item] == 0) {
            unset($_SESSION['cart'][$item]);
        }
        return;
    }

    // Increment the quantity of the item in the cart by 1
    $_SESSION['cart'][$item] = $_SESSION['cart'][$item] + 1;
}


	
}