<?php 
session_start();
include "../services/tools.php";


$email = $_POST['email'];
$password = $_POST['password'];
// echo $email;
// exit;
$sql = "SELECT * 
    FROM user 
    WHERE email LIKE '$email'";
// echo $sql;
// exit;
$bdd = new PDO('mysql:host=localhost;dbname=banana_store','root','troiswa');
$bdd->exec('SET NAMES UTF8');

$statement = $bdd->prepare($sql);
$statement->execute();
$user = $statement->fetch();



// if ($user == null) {

//     echo 'Mauvais identifiant ou mot de passe !';
       
// } else {

//     echo "Bonjour {$user['firstname']} {$user['lastname']}";
  
// }



if (!$user){

    echo "Votre identifiant n'existe pas!";

} else {
    if ($user["password"] == $password) {
        $_SESSION['id'] = $user['id'];
        //mettre le minimum en session créer la fonction getUserById $_SESSION['email'] = $email;
        // $_SESSION['firstname'] = $user['firstname'];
        // $_SESSION['lastname'] = $user['lastname'];

        // echo "Bonjour {$user['firstname']} {$user['lastname']}";
        header("location : home.php");
        exit;

    } else {

        echo 'Votre mot de passe est erroné !';
        header("location : login.php");

    }
}


