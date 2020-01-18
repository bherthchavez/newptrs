<?php
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $mysqli->query("SELECT * FROM `admin` WHERE `username` = '$username' and `password` = '$password' and admin = '1' ") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();

	if($valid > 0){


		
		session_start();
		$_SESSION['Team_Name'] = $fetch['Team_Name'];

		$query1 = $mysqli->query("SELECT * from team where Team_Name = '$fetch[Team_Name]' ") or die(mysqli_error());
        $valid1 = $query1->num_rows;
        $fetch1 = $query1->fetch_array();
         
         if($valid1 > 0) {
        
          
          echo 'Success';
          
          }
          else
          {     
          
          echo 'Success1';
          
          }        



	}else{
		echo 'Error';
	}