<?php


	session_start();
	if(!ISSET($_SESSION['Team_Name'])){
		header("location:index.php");
	}
	
?>