<?php
include "../services/functions.php";
include "../services/tools.php";

$productsList = getProductList();

// pre($productsList);

include '../views/header.phtml';
include '../views/index.phtml';
include '../views/footer.phtml';