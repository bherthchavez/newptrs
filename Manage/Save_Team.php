<?php 

  require_once '../connect.php';


if (isset($_POST['submit']))
{


	       

$Team_Name = htmlentities($_POST['Team_Name'], ENT_QUOTES);
$District = htmlentities($_POST['District'], ENT_QUOTES);
$Organization = htmlentities($_POST['Organization'], ENT_QUOTES);
$Jersey_Color = htmlentities($_POST['Jersey_Color'], ENT_QUOTES);

$Captain_Name = $_POST['Captain_Name'];
$Player_2 = $_POST['Player_2'];
$Player_3 = $_POST['Player_3'];
$Player_4 = $_POST['Player_4'];
$Player_5 = $_POST['Player_5'];
$Player_6 =  $_POST['Player_6'];
$Player_7 =  $_POST['Player_7'];
$Player_8 =  $_POST['Player_8'];
$Player_9 =  $_POST['Player_9'];
$Player_10 =  $_POST['Player_10'];

$Player_11 =  $_POST['Player_11'];
$Player_12 =  $_POST['Player_12'];
$Player_13 =  $_POST['Player_13'];
$Player_14 =  $_POST['Player_14'];
$Player_15 =  $_POST['Player_15'];
$Player_16 =  $_POST['Player_16'];
$Player_17 =  $_POST['Player_17'];
$Player_18 =  $_POST['Player_18'];
$Player_19 =  $_POST['Player_19'];
$Player_20 = $_POST['Player_20'];

$Player_21 =  $_POST['Player_21'];
$Player_22 =  $_POST['Player_22'];
$Player_23 =  $_POST['Player_23'];
$Player_24 =  $_POST['Player_24'];

$M_Contact = htmlentities($_POST['M_Contact'], ENT_QUOTES);
$M_Email = htmlentities($_POST['M_Email'], ENT_QUOTES);
$C_Contact = htmlentities($_POST['C_Contact'], ENT_QUOTES);
$C_Email = htmlentities($_POST['C_Email'], ENT_QUOTES);

$date = date('m/d/Y h:i:s', time());


if ($Team_Name == '' || $District == '' || $Organization == '' || $Jersey_Color == '')
{

$error = 'ERROR: Please fill in all required fields!';
renderForm($Team_Name, $District, $Organization, $Jersey_Color, $error);
}
else
{

if ($stmt = $mysqli->prepare("INSERT INTO team  VALUES ('', '$Team_Name', '$Team_Name', '$District', '$Organization', '$Jersey_Color', '$Captain_Name', '$Player_2', '$Player_3', '$Player_4', '$Player_5', '$Player_6', '$Player_7', '$Player_8', '$Player_9', '$Player_10', '$Player_11', '$Player_12', '$Player_13', '$Player_14', '$Player_15', '$Player_16', '$Player_17', '$Player_18', '$Player_19', '$Player_20', '$Player_21', '$Player_22', '$Player_23', '$Player_24', '$M_Contact', '$M_Email', '$C_Contact', '$C_Email', '$date')"))

{
// $stmt->bind_param("ss", $Team_Name, $District, $Organization, $QID);
$stmt->execute();
$stmt->close();
}

// if ($stmt = $mysqli->prepare("INSERT INTO employees_acc  VALUES ('', '$employee_code', '$F_Name $L_Name', '$Department', '$Email', '$username', '$password')"))	
// {
// $stmt->bind_param("ss", $Start_Date, $End_Date, $types, $LeaveFor, $Reason );
// $stmt->execute();
// $stmt->close();
// }

else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user

header("Location: Team_Msg.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}


// close the mysqli connection
$mysqli->close();
?>