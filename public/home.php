<?php
include "../services/functions.php";
include "../services/tools.php";

$productsList = getProductList();

// pre($productsList);


include '../views/home.phtml';
