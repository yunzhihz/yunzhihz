<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username === 'zhangsan' && $password === '123456') {
		header('Location: index.php');
	} else {
		header('Location: login.view.php');
	}
?>