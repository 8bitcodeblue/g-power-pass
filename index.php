<?php
//Include Class Password Generator
require 'PasswordGenerator.php';
	// Base 64 Encode
	$password = new PassWordGenerator("High", "High", 20);
	var_dump($password->password);
	//Only letters
	$password = new PasswordGenerator("Normal", "Slow", 10);
	var_dump($password->password);
	//Only numbers and letters
	$password = new PassWordGenerator("Medium", "Slow", 10);
	var_dump($password->password);
	//Letters Base 64 Encode
	$password = new PassWordGenerator("Normal", "High", 15);
	var_dump($password->password);
	//Numbers Base 64 Encode
	$password = new PasswordGenerator("Medium", "High", 10);
	var_dump($password->password);
 ?>

