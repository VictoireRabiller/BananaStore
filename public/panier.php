<?php
include '../bootstrap.php';



if (isset( $_GET['id'])){
	$id = $_GET['id'];
	$_SESSION['cart'][] = $id;
}


// pre($productToCart); si y a un Id if isset je l'ajoute




include '../views/panier.phtml';
