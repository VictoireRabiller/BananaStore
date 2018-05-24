<?php

function getUserByEmail($email) {
	$sql = "SELECT * FROM user WHERE email LIKE '$email'";

	$db = new PDO('mysql:host=localhost;dbname=banana_store', 'root', 'troiswa');

	$statement = $db->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	return $user;
}

function getUserById($id) {
	$sql = "SELECT * FROM user WHERE id = $id";

	$db = new PDO('mysql:host=localhost;dbname=banana_store', 'root', 'troiswa');

	$statement = $db->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	return $user;
}
