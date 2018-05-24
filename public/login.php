<?php
include '../bootstrap.php';

// pre($_GET);
// exit;
if ( $ip = $_GET ){
	
	if ( $ip = $_GET['error'] ){

        $error = $ip; 
    
    }

    // $error = $_GET['error'];


}


include '../views/login.phtml';

