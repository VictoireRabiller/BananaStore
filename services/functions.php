<?php

function getDb(){
	$user = 'root';
	$password = 'antony';
	$db =new PDO(
		'mysql:host=localhost;dbname=banana_store', 
		$user, 
		$password,
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
		);
	$db->exec('SET NAMES UTF8');
	return $db;
}

function getProductList($word = null){
	$db=getDb();

	if ($word) {
		$sql = "SELECT * FROM product WHERE name LIKE '%$word%' OR description LIKE '%$word%'";

	} else {
		$sql = "SELECT * FROM product";
	}

	$statement = $db->prepare($sql);
	$statement->execute();
	$products = $statement->fetchAll(\PDO::FETCH_ASSOC);

	return $products;
}



function findProductList($research){
	$db=getDb();
	$sql = "SELECT * FROM product WHERE description LIKE '%$research%'";
	// $sql = "SELECT * FROM product WHERE description LIKE '%" . $research ."%'";
	$statement = $db->query($sql, \PDO::FETCH_ASSOC);
	$products = [];

	foreach ($statement as $product){
		$products[] = $product;
	}
	return $products;
}





function getProduct($id){
	$db=getDb();

	$sql = "SELECT * FROM `product` WHERE id = '$id' ";
	$statement = $db->prepare($sql);
	$statement->execute();
	$product = $statement->fetch(\PDO::FETCH_ASSOC);

	return $product;
}


// function addProductToCart($id){
// 	$user = 'root';
// 	$password = 'antony';

// 	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
// 	$db->exec('SET NAMES UTF8');
// 	// $sql = "SELECT * FROM product";

// 	// $statement = $db->query($sql, \PDO::FETCH_ASSOC);
// 	// $products = [];

// 	// foreach ($statement as $product){
// 	// 	$products[] = $product;
// 	// }
// 	// return $products;

// 	$sql = "SELECT * FROM `product` WHERE id = '$id' ";
// 	$statement = $db->prepare($sql);
// 	$statement->execute();
// 	$product = $statement->fetchAll(\PDO::FETCH_ASSOC);

// 	return $product;
// }

// function reset() {
// 	$_SESSION['cart'] = [];	
// }

function add($productId, $quantity) {

	$cart = $_SESSION['cart'];

	if (isset($cart[$productId])) {

		$cart[$productId]['quantity'] += $quantity;

	} else {
		$cart[$productId] = ['id' => $productId, 'quantity' => $quantity];
	}

	$_SESSION['cart'] = $cart;
}

function getProductsWithQuantity() {

    $cart = $_SESSION['cart'];

    $products = [];

    foreach ($cart as $row) {
        $productId = $row['id'];
        $quantity = $row['quantity'];

        $product = getProduct($productId);
        $product['quantity'] = $quantity;

        $products[] = $product;
    }

    return $products;
}

function getProductNumber() {

    return count($_SESSION['cart']);
}

function deleteOneProduct($productId) {
		
	$cart = $_SESSION['cart'];
		
	unset($cart[$productId]);

	$_SESSION['cart'] = $cart;
	// reinjecte le tableau dans la session

}
