<?php
	require("functions/functions.php");
	$name = $_POST['name'];
	$age = $_POST['age'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$type = $_POST['type'];

	echo $functions->signup($name, $age, $password, $phone, $type);
?>