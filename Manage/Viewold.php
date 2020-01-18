<!DOCTYPE html>
<?php

  require_once'../connect.php';
   require_once 'session.php';

?>
<html>
<title> Player Registration </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="../css/Main_style.css">
<link rel="icon" href="../images/QIFFicon.png">
</head>

<body>

<style> 
/*
    input[type=text] {
    width:50%;
        padding: 10px 198px;

    margin: 8px 31px;

    box-sizing: border-box;
        font-size: 19px;*/
         

  
}
label {
  font-size: 22px;
  font-weight: normal;
  line-height: 18px;
     

}

.pull-right {
  float: right;
      margin-right: 133px;
}
.form-control {
    display: block;
    width: 88%;
    height: 27px;
    padding: 4px 13px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    margin-top: 5px;
    margin-bottom: 22px;
      display: inline-block;
            text-decoration: none;

}

.form-group {
    margin-bottom: 15px;
}


.btn {
    display: inline-block;
        padding: 16px 0px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #ffffff;
    display: inline-block;
            text-decoration: none;
 
}
.btnprint {
    display: inline-block;
        padding: 8px 19px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #ffffff;
    display: inline-block;
            text-decoration: none;
 
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-back {
    color: #fff;
    background-color: #14983c;
    border-color: #14983c;
}


.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {
  width: 33.33%;
  margin-left: 70px;
    /*margin-right: 122px;*/
}
.col-5 {
  width: 41.66%;
  margin-left: 70px;
    /*margin-right: 122px;*/
}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {
  width: 83.33%;
 margin-left: 70px;
}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;
margin-left: 70px;
}
.btnview {
    
    /*border: none;*/
    color: #000000;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    border: 2px;
}
.btn1 {
    background-color: #9ae4fb;
}

.btn2 {
    background-color: #dd2a2a;
}

.btn3 {
    background-color: #f49a15;
}
.btn4 {
    background-color: #0e90d6;
}
.btn5 {
    background-color: #b10000;
    color: #ffffff;
}
.form-group {
    margin-bottom: 4px;
}
</style>

<div class="header">
 
 <a href="Player.php"> <img id="ea3" src="../images/Header.png" style="width: 100%; height: auto;" > </a>
 
 
  
</div> 
<!-- end of header  -->
          
                    <?php
                   
                    
                    $query = $conn->query("SELECT * FROM players WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();
                    ?> 



<div class="aside">
<div class="row">


<form method = "POST" enctype = "multipart/form-data" action = "Save_Player.php">
        
          <center>
                <h3 style="color: #c00000;"> 11th Inter District Football Tournament 2017
                Details of participating Team & Player. </h3>
</center>


                
 <div class="pull-right ">
                  <div class = "form-group">
                    <a  href="Print_Player.php?id=<?php echo $fetch['id']?>" type="button" target="_blank" class = "btnprint btn5 form-control" name = "back" ><img src= "../images/Print.png"> Print</a>
                  </div>
                  </div>
<!-- <div class="pull-right"> -->
 <strong><label>Date Added: </label> </strong>
                    <br/>
                    
                   <?php
                   $date =$fetch['Date']; 
                       echo date('M d, Y / h:i:s', strtotime($date));
                   ?>

                   <br/>
 <!-- </div> -->
<br>
<br>

                 

<div class = "col-5">

                   <br/>
                 
                  <div class = "form-group">
                    <label>Name of the Team</label>
                    <input type = "text" class = "form-control"  name = "Team_Name" value = "<?php echo $fetch['Team_Name']?>" disabled=""/>
                  </div>
                  <div class = "form-group">
                    <label>DISTRICT</label>
                    <input type = "text" class = "form-control"  name = "DISTRICT" value = "<?php echo $fetch['District']?>" disabled=""/>
                  </div>
                  <div class = "form-group">
                    <label>Name as in Passsport</label>
                    <input type = "text" class = "form-control"  name = "Passsport_Name" value = "<?php echo $fetch['Name_in_Passport']?>" disabled="" />
                  </div>
                  <div class = "form-group">
                    <label>Passport No.</label>
                    <input type = "text" class = "form-control"  name = "Passport_No" value = "<?php echo $fetch['Passport_No']?>" disabled=""/>
                  </div>

                   <div class = "form-group">
                    <label>Qatar I.D No.</label>
                    <input type = "text" class = "form-control"  name = "QID" value = "<?php echo $fetch['Qatar_ID']?>" disabled=""/>
                  </div>
                 
                  <div class = "form-group">
                    <label>Validity</label>
                    <input type = "text" class = "form-control"  name = "Validity" value = "<?php echo $fetch['Validity']?>" disabled="" />
                  </div>
                  <br>
                  <br>
                   <div class = "form-group">
                    <label>Date of Birth  (Eg. 12 Aug 1987)</label>
                    <input type = "text" class = "form-control"  name = "Bday" value = "<?php echo $fetch['Date_of_Birth']?>" disabled="" />
                  </div>
                   <div class = "form-group">
                    <label>Name of the Sponsor</label>
                    <input type = "text" class = "form-control"  name = "Sponsor" value = "<?php echo $fetch['Name_of_Sponsor']?>" disabled="" />
                  </div>
                   <div class = "form-group">
                    <label>Tel (Doha)</label>
                    <input type = "text" class = "form-control"  name = "Tel" value = "<?php echo $fetch['Tel']?>" disabled="" />
                  </div>
                  <div class = "form-group">
                    <label>Address as in the Passport with Telephone No(India)</label>
                    <textarea name="Address" style="height:100px; resize:none;" class="form-control" disabled="" ><?php echo $fetch['Address']?></textarea>
                  </div>
                 
                </div>  


 <div class = "col-4">
                 
               
           <br/>
          
          
          
                <strong> <label>Photo</label></strong>
                 <div id = "picture">
                    <img onerror="this.src = '<?php if($fetch['image_name'] == "default.png"){echo "../images/".$fetch['image_name'];}else{echo "../Photos/".$fetch['image_name'];}?>'" height = "200px" width = "200px" id="pic" src="#" />
                  </div>
                  <a href="../Photos/<?php echo $fetch['image_name']?>"  type="button" class = "btnview btn1" title='Download' download> <img src= "../images/download.png" download> Download</a>
                 



                  <br />
                  <br />
                   <br />
                      <br />
                        <br />
                
                      
                    <div class = "form-group">
                    <strong> <label>Passport copy with address page </label></strong>
                    <br />
                    <br>
                
                  1. <u> Passport Front View</u>
                    <a href="../files/<?php echo $fetch['Passport_Name']?>" type="button" class = "btnview btn1" title='Download' download> <img src= "../images/download.png" download> Download</a>
                  <br/>
                   2. <u> Passport Back View</u>
                    <a href="../files/<?php echo $fetch['Passport_Back']?>" type="button" class = "btnview btn1" title='Download' download> <img src= "../images/download.png" download> Download</a>  
                  </div>

                 <br />
                  <br />
                  <br />
                    <br />

                  <div class = "form-group">
                     <strong><label> Qatar ID Copy </label></strong>
                    <br />
                    <br>
                   1. <u>QID Front View</u> 
                   <a href="../files/<?php echo $fetch['QID_Name']?>"  type="button" class = "btnview btn1" title='Download' download> <img src= "../images/download.png" download> Download</a>
                   <br/>
                     2. <u>QID Back View</u> 
                   <a href="../files/<?php echo $fetch['QID_Back']?>"  type="button" class = "btnview btn1" title='Download' download> <img src= "../images/download.png" download> Download</a>
                  </div>
 <br />
                 <br />
                  <br />
                 
                 <br />
               
                 <div class = "form-group">
                    <a  href="Add_Player.php" type="button" class = "btn btn4 form-control" name = "back" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Add New</a>
                  </div>

                  <div class = "form-group">
                    <a  href="Update.php?id=<?php echo $fetch['id']?>" type="button" class = "btn btn3 form-control" name = "back" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Update</a>
                  </div>

                  <div class = "form-group">
                    <a  href = "Delete.php?id=<?php echo $fetch['id']?>" onClick="return confirm('Are you sure you want to delete this player?');" type="button" class = "btn btn2 form-control" name = "back" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Delete</a>
                  </div>

                   <div class = "form-group">
                    <a  href="Player.php" type="button" class = "btn btn-back form-control" name = "back" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Back</a>
                  </div>
                 
                </div>


<!-- onclick="return confirm('Saving New Player?');" -->


              </form>   
</div>
</div> 
 <!-- end of aside -->
  
<!-- <div class="footer">
  <a href="http://nakheellandscapes.com/" target="_blank"><img src="../images/Nakheel Logo2.png"> Al Nakheel Landscapes</a>. © 2017, All Rights Reserved
  <span style="float:right;" > POWERED BY: <img src="../images/BlueMedia1.png"> <a href="http://www.qatpedia.com/company/qatar/blue-media-networks-doha" target="_blank"> Blue Media Networks </span>  
</div> -->
 <!-- end of footer -->


</body>



<!-- <script language="Javascript">

    function IsEmpty(){ 

        if(document.form.Team_Name.value == "")
        {
            alert("empty");
        }
        return;
    }


</script> -->


</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->