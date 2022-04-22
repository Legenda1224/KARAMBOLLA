<?php
	require_once "mysql/mysql_connect.php";
	$data = [
		'email' => $_POST['email'],
		'name' => $_POST['name'],
		'pass' => $_POST['password'],
		'phone' => $_POST['tel'],
	];
	if(($data['email'] and $data['name'] and $data['pass'] and $data['phone'])!=""){
		$que1 = $dbh->prepare("INSERT INTO `users` (`email`, `name`, `pass`, `phone`) VALUES (?, ?, ?, ?)");
		$que1->execute([$data['email'],$data['name'],$data['pass'],$data['phone']]);
		echo "Успех!";
		exit();

	};
	header("refresh:5;url=header-menu.php");
	
?>