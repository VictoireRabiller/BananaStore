<?php
include '../bootstrap.php';


$productsList = getProductList();

// pre($productsList);


include '../views/home.phtml';
