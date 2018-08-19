<?php

function getUserByEmail($email) {
	$db=getDb();
	$sql = "SELECT * FROM user WHERE email LIKE '$email'";

	$statement = $db->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	return $user;
}

function getUserById($id) {
	$sql = "SELECT * FROM user WHERE id = $id";

	$db=getDb();
	$statement = $db->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	return $user;
}

function createUser($user){

	$db=getDb();

	// if (empty($user['email'])) {
	// 		throw new Exception("Email empty");
	// 	}

	// if (empty($user['password'])) {
	// 		throw new Exception("password empty");
	// }


	$user['password'] = crypt($user['password'], 'rl');


	
	$sql = "
			INSERT INTO user
			(id, firstname, lastname, tel, email, password)
			VALUES (NULL, :firstname, :lastname, :tel, :email, :password)
			";

	$statement = $db->prepare($sql);

	$statement->execute($user);
}