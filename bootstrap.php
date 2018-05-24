<?php
session_start();

include '../services/tools.php';
include '../services/functions.php';
include '../services/userService.php';


if (isset ($_SESSION['cart']) == false ){
	$_SESSION['cart'] = [];
}
