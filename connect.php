<?php
	
date_default_timezone_set('Asia/Qatar');
	
	 $conn = new mysqli('localhost', 'root', '', 'qiff') or die(mysqli_error());

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'qiff';


// $server = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'qiff';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>