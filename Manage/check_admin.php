<?php
	require_once '../connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $mysqli->query("SELECT * FROM `admin` WHERE `username` = '$username' and `password` = '$password' and admin = '1' ") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();

	if($valid > 0){


		 echo 'Success';
		session_start();
		$_SESSION['Team_Name'] = $fetch['Team_Name'];

	



	}else{
		echo 'Error';
	}