<?php 
include "../bootstrap.php";


$email = $_POST['email'];

$password = crypt($_POST['password'],'rl');


$user = getUserByEmail($email);


if ($user == null) {
    header('Location: login.php?error=1');
    exit;


} else {
    
    if ($password == $user['password']) {

        $_SESSION['iduser'] = $user['id'];

        header('Location: home.php');
        exit;

    } else {

        header('Location: login.php?error=2');
        exit;

    }

}


