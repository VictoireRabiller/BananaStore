<?php
session_start();
include "../services/functions.php";
include "../services/tools.php";

// $user = 'root';
// $password = 'troiswa';


// try
// {
// 	$db =new PDO('mysql:host=localhost;dbname=banana_store', $user, $password);
// 	$db->exec('SET NAMES UTF8');


// }

// catch(Exception $e)

// {

//     // En cas d'erreur, on affiche un message et on arrête tout

//         die('Erreur : '.$e->getMessage());

// }



// $research = $db->prepare('SELECT name, description FROM product WHERE name = ?  OR description = ? ORDER BY name');

// $research->execute(($_GET['name'], $_GET['description']));


// echo '<ul>';

// while ($donnees = $research->fetch())

// {

//     echo '<li>' . $donnees['name'] . ' (' . $donnees['price'] . ' EUR)</li>';

// }

// echo '</ul>';


// $research->closeCursor();



$productsSearch = findProductList( $_GET["research"] );
// pre($productsSearch);



include '../views/resultList.phtml';

