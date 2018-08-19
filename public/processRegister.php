<?php
include '../bootstrap.php';


// //formatage de la date pour db
// $timestamp = mktime(0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year']);

// $_POST['birthdate'] = date('Y-m-d', $timestamp);
//         //j'efface mes variables month day et year du _POST
// unset($_POST['month']);
// unset($_POST['day']);
// unset($_POST['year']);


$user = [];


$user['firstname'] = $_POST['firstname'];
$user['lastname'] = $_POST['lastname'];
$user['tel'] = $_POST['tel'];
// $user['birthdate'] = $_POST['birthdate'];
$user['email'] = $_POST['email'];
$user['password'] = $_POST['password'];

createUser($user);

// pre($user);
// exit;

header('Location: login.php');




