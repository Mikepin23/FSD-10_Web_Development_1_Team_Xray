<?php 

class Cart extends Model{

	public function __construct(){
		// setup db model to use the categories table
		parent::__construct('toys');
	}

	public function addToCart($item) {

		if( !isset( $_SESSION['cart'] ) ) {
			$_SESSION['cart'] = [];
		} 
		
		if ( !isset ( $_SESSION['cart'][$item]) ) {
			$_SESSION['cart'][$item] = 0;
		} 

		$val = $this->findone(['ToysID=?', $item]);
		if ($val['Stock'] < $_SESSION['cart'][$item] + 1){
			// throw error
			print_r('Error'); // TODO: javascript alert that there is no stock available
			if ($_SESSION['cart'][$item] == 0){
				unset($_SESSION['cart'][$item]);
			}
			return;
		}
		$_SESSION['cart'][$item] = $_SESSION['cart'][$item] + 1;
}

	
}