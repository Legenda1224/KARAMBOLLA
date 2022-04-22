<?php
	require_once "mysql_data.php";
	$dbh = new PDO("mysql:host=localhost;dbname=magazin", $mysql_data['user'], $mysql_data['pass']);
?>