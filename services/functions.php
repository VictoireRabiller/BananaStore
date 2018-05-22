<?php

function getProductList(){
	$user = 'root';
	$password = 'troiswa';

	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
	$db->exec('SET NAMES UTF8');
	$sql = "SELECT * FROM product";

	$statement = $db->query($sql, \PDO::FETCH_ASSOC);
	$products = [];

	foreach ($statement as $product){
		$products[] = $product;
	}
	return $products;
}



function findProductList($research){
	$user = 'root';
	$password = 'troiswa';

	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
	$db->exec('SET NAMES UTF8');
	$sql = "SELECT * FROM product WHERE description LIKE '% $research%'";
	// $sql = "SELECT * FROM product WHERE description LIKE '%" . $research ."%'";
	$statement = $db->query($sql, \PDO::FETCH_ASSOC);
	$products = [];

	foreach ($statement as $product){
		$products[] = $product;
	}
	return $products;
}


