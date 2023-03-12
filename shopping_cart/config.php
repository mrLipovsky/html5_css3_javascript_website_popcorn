<?php

    $host = "localhost";
	$db_name = "php_popcorn_cart";
	$username = "web_user";
	$password = 'heslo';

	global $mysqli;

	//Register form Connect to DB
	$conn = mysqli_connect($host, $username, $password, $db_name) or die('bad connection: '.mysqli_connect_error());

	

?>
