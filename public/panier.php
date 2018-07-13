<?php
include '../bootstrap.php';



if (isset( $_GET['id'])){
	$id = $_GET['id'];
	$_SESSION['cart'][] = $id;
}
	
		// $ids = $_SESSION['cart'];
		// $products = [];
		// foreach ($ids as $id) {
		// 	$product = getProduct($id);
		// 	$products[]= $product;
		// }

// pre($productToCart); si y a un Id if isset je l'ajoute


$ids = $_SESSION['cart'];
$products = [];
foreach ($ids as $id) {
	$product = getProduct($id);
	$products[]= $product;
}




include '../views/panier.phtml';
