<?php
	setcookie('user', $row[name], time()+1, "/");
	setcookie('user_id', $row[id], time()+1, "/");
	setcookie('user_email', $row[email], time()+1, "/");
	sleep(3);
	header("Location: /");
?>