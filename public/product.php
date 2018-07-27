<?php
include '../bootstrap.php';


$product = getProduct( $_GET['id'] ); 
// pre($productSelect);




include '../views/product.phtml';
