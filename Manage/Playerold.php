<!DOCTYPE html>
<?php
  require_once 'session.php';
 
?>
<html>
<title> Player List </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="../css/Main_style.css"> -->
<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../images/QIFFicon.png">
</head>


<body>

<div class="header"> 
 <a href="#"> <img id="ea3" src="../images/Header.png" style="width: 100%; height: auto;" > </a>
</div> 
<!-- end of header  -->


<div class="aside">


<div class="topnav">
      <a  href="Add_Player.php">Player Registration</a>
      <a href="Team_List.php">View Team List</a>
      <a href="logout.php">Logout</a>
      <div class="pull-right">

      <a href="#Admin"> <i> <?php
      echo  $_SESSION['Team_Name'];
      ?> </i></a>
      </div>
  
</div>



<div class="row">


<br>
<br>
<br>


            <div class = "col-10">
                  
               <label style=" font-size: 20px;     color: #a41111;"> <strong> Player List </strong>
               </label>
                <input type="text" id="myInputSearch" onkeyup="myFunction()" placeholder="Search Team Name ..." title="Type Procedure File name">
                 
                 <!-- <div class = "form-group">
                    <a  href="Add_Player.php" type="button" class = "btnadd btn3" name = "back" style="width: 10%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Add</a>
                  </div> -->
                   <p><b>View All</b> | <a href="PlayerPages.php">View Paginated</a></p>
                   
                   
                    <div class="scrollWrapper">

                     <?php
                  // connect to the database
                  include('../connect.php');

                  // get the records from the database
                  if ($result = $mysqli->query("SELECT * FROM players  ORDER BY id"))
                  {
                  // display records if there are records to display
                  if ($result->num_rows > 0)
                  {
                  // display records in a table
                  echo "<table id=\"myTable\" border='1' cellpadding='10'>";

                  // set table headers
                   echo "<tr class=\"header\"> 
                        <th> Player Name </th>
                        <th> Team Name </th>
                        <th> District </th>
                         <th> <center>  Photo / Date Added </center </th>
                        <th>  <center> Passport Attachment </center </th>
                         <th> <center> QID Attachment </center </th>
                         
                        <th> <center> Action </center </th>
                        </tr>";


                  while ($row = $result->fetch_object())
                  {
                  // set up a row for each record
                   echo "<tr >";
                        echo '<td>' . $row->Name_in_Passport . '</td>';
                        echo '<td>' . $row->Team_Name .'</td>';
                        echo '<td>'. $row->District . '</td>';
                          echo "<td> <center> <img src ='../Photos/" . $row->image_name ."' height = \"60px\" width = \"60px\"/>
                              <br/>  ". $row->Date ." </center>

                               </td>";
                        echo "<td> <center> Passport Front View  <a href='../files/" . $row->Passport_Name . "' type=\"button\" class = \"btn btn1\" title='Download' Download> <img src= \"../images/download.png\" Download> </a> 
                           <br/>
                            <center> Passport Back View  <a href='../files/" . $row->Passport_Back . "' type=\"button\" class = \"btn btn1\" title='Download' Download> <img src= \"../images/download.png\" Download> </a> </td>";

                              echo "<td> <center> QID Front View  <a href='../files/" . $row->QID_Name . "' type=\"button\" class = \"btn btn1\" title='Download' Download> <img src= \"../images/download.png\" > </a> 
                           <br/>
                            <center> QID Back View  <a href='../files/" . $row->QID_Back ."' type=\"button\" class = \"btn btn1\" title='Download' Download> <img src= \"../images/download.png\" > </a> </td>";


                          echo "<td> <center>  <a href='View.php?id=" . $row->id . "' type\"button\" class = \"btn btn2\" title='View'> <img src= \"../images/viewForm.png\"> View</a> <center>
                   

                        </td>";
                        
                        
                        echo "</tr>";
                  }

                  echo "</table>";
                  }
                  // if there are no records in the database, display an alert message
                  else
                  {
                  echo "No Leaves to display!";
                  }
                  }
                  // show an error if there is an issue with the database query
                  else
                  {
                  echo "Error: " . $mysqli->error;
                  }

                  // close database connection
                  $mysqli->close();

                  ?>




                 
                             
            </div>  



                             

 
          
</div>
</div> 


 <!-- end of aside -->
  
<!-- <div class="footer">
  <a href="http://nakheellandscapes.com/" target="_blank"><img src="../images/Nakheel Logo2.png"> Al Nakheel Landscapes</a>. © 2017, All Rights Reserved
  <span style="float:right;" > POWERED BY: <img src="../images/BlueMedia1.png"> <a href="http://www.qatpedia.com/company/qatar/blue-media-networks-doha" target="_blank"> Blue Media Networks </span>  
</div> -->
 <!-- end of footer -->


</body>

<script>

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];

    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->