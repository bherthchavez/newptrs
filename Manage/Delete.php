<?php

// connect to the database
include('../connect.php');
require_once 'session.php';


// confirm that the 'id' variable has been set
if (isset($_GET['id']) )
{

  
                    $query = $conn->query("SELECT * FROM players WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();
                    


$id = $_GET['id'];

$photo = $fetch['image_name'];
$passport = $fetch['Passport_Name'];
$qid = $fetch['QID_Name'];

$Back_passport = $fetch['Passport_Back'];
$Back_qid = $fetch['QID_Back'];


unlink('../Photos/'.$photo);
unlink('../files/'.$passport);
unlink('../files/'.$qid);

unlink('../files/'.$Back_passport);
unlink('../files/'.$Back_qid);

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM players WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}

else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: Player_msg_d.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: Player_msg_d.php");
}

?>