<?php
	require_once "mysql/mysql_connect.php";
	$email = $_POST['email_log'];
	$pass = $_POST['password_log'];
	$que1 = $dbh->query("SELECT * FROM `users` WHERE `email`='$email' and `pass`='$pass'");
	foreach ($que1 as $row) {
		if($row[id] != ""){
			setcookie('user', $row[name], time()+3600*24*30, "/");
			setcookie('user_id', $row[id], time()+3600*24*30, "/");
			setcookie('user_email', $row[email], time()+3600*24*30, "/");
			
			
		}
	}
	header("Location: /");
?>