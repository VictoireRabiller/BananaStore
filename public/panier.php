<?php
include '../bootstrap.php';


$product = getProduct( $_GET['id'] ); 
// pre($productToCart);




include '../views/panier.phtml';
