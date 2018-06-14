<?php

function getProductList($word = null){
	$user = 'root';
	$password = 'antony';

	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
	$db->exec('SET NAMES UTF8');
	// $sql = "SELECT * FROM product";

	// $statement = $db->query($sql, \PDO::FETCH_ASSOC);
	// $products = [];

	// foreach ($statement as $product){
	// 	$products[] = $product;
	// }
	// return $products;

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
	$user = 'root';
	$password = 'antony';

	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
	$db->exec('SET NAMES UTF8');
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
	$user = 'root';
	$password = 'antony';

	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
	$db->exec('SET NAMES UTF8');
	// $sql = "SELECT * FROM product";

	// $statement = $db->query($sql, \PDO::FETCH_ASSOC);
	// $products = [];

	// foreach ($statement as $product){
	// 	$products[] = $product;
	// }
	// return $products;

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

