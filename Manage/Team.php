<!DOCTYPE html>
<?php
  
  require_once 'session.php';

?>
<html>
<title> Team Registration </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="../css/Main_style.css">
<link rel="icon" href="../images/QIFFicon.png">
</head>

<body>

<style> 
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 52px 12px;
    border: 1px solid #ccc;
    border-top: none;
}




.pull-right2 {
  float: right;
      margin-right: 88px;
}


.form-control {
    display: block;
    width: 102%;
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
    padding: 6px 12px;
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
        /*height: 43px;*/
    width: 103%;
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
/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.select1{
 
    height: 41px;
    width: 108%;
}

input[type="file"] {



      background-color: #d9efff;
}

</style>

<div class="header">
 
 <a href="Team_List.php"> <img id="ea3" src="../images/Header.png" style="width: 100%; height: auto;">  </a>

 
  
</div> 
<!-- end of header  -->

<div class="aside">


          <center>
                <h3 style="color: #c00000;"> 11th Inter District Football Tournament 2017 List of Players. </h3>
</center>
<br>
<br>




<form method = "POST" enctype = "multipart/form-data" action = "Save_Team.php">
  <div style = "width:40%; margin-left:30%;"> 

                  <div class = "form-group">
                    <label>NAME OF THE TEAM</label>
                    <!-- <input type = "text" class = "form-control"  name = "Team_Name" required = "" autofocus="" /> -->
                      <select class = "form-control select1" name = "Team_Name" autofocus="" required = "required">
                      <option value="">Please select a Team ...</option>
                      <option value = "KMCC MALAPPURAM">KMCC MALAPPURAM</option>
                      <option value = "MAMWAQ MALAPPURAM">MAMWAQ MALAPPURAM</option>
                      <option value = "DIWA KASARGOD">DIWA KASARGOD</option>
                      <option value = "KMCC PALAKKAD">KMCC PALAKKAD</option>
                      <option value = "YAAS THRISSUR">YAAS THRISSUR</option>
                      <option value = "KMCC KANNUR">KMCC KANNUR</option>
                      <option value = "TJYS THRISSUR">TJYS THRISSUR</option>
                      <option value = "UEAQ ">UEAQ </option>
                       <option value = "KMCC KOZHIKKODE ">KMCC KOZHIKKODE </option>
                        <option value = "KMCC WAYANAD ">KMCC WAYANAD </option>
                    </select>
                  </div>
                  <div class = "form-group">
                    <label>DISTRICT</label>
                    <input type = "text" class = "form-control"  name = "District" required = ""/>
                  </div>
                  <div class = "form-group">
                    <label>ORGANIZATION</label>
                    <input type = "text" class = "form-control"  name = "Organization" District" required = ""/>
                  </div>
                  <div class = "form-group">
                    <label>COLOUR OF JERSEY</label>
                    <input type = "text" class = "form-control"  name = "Jersey_Color" required = ""/>
                  </div>
                  <br>
                  <br>

                     <div class = "form-group">
                    <label>PLAYERS NAME:</label>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Captain_Name" placeholder="Player 1 (Captain Name)"  required = "" />
                  </div>
       
                   <div class = "form-group">
                   
                    <input type = "text" class = "form-control"  name = "Player_2"  placeholder="Player 2 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_3"  placeholder="Player 3 Name" required = ""  />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_4"  placeholder="Player 4 Name" required = "" />
                  </div>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_5" placeholder="Player 5 Name" required = "" />
                  </div>

                   <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_6" placeholder="Player 6 Name" required = "" />
                  </div>
       
                   <div class = "form-group">
                   
                    <input type = "text" class = "form-control"  name = "Player_7"  placeholder="Player 7 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_8"  placeholder="Player 8 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_9"  placeholder="Player 9 Name" required = "" />
                  </div>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_10" placeholder="Player 10 Name" required = "" />
                  </div>

                   <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_11" placeholder="Player 11 Name" required = "" />
                  </div>
       
                   <div class = "form-group">
                   
                    <input type = "text" class = "form-control"  name = "Player_12"  placeholder="Player 12 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_13"  placeholder="Player 13 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_14"  placeholder="Player 14 Name" required = "" />
                  </div>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_15" placeholder="Player 15 Name" required = ""/>
                  </div>

                   <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_16" placeholder="Player 16 Name"  required = ""/>
                  </div>
       
                   <div class = "form-group">
                   
                    <input type = "text" class = "form-control"  name = "Player_17"  placeholder="Player 17 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_18"  placeholder="Player 18 Name" required = ""/>
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_19"  placeholder="Player 19 Name" required = "" />
                  </div>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_20" placeholder="Player 20 Name" required = ""/>
                  </div>

                  <input type = "text" class = "form-control"  name = "Player_21"  placeholder="Player 21 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_22"  placeholder="Player 22 Name" required = "" />
                  </div>
                   <div class = "form-group">
                 
                    <input type = "text" class = "form-control"  name = "Player_23"  placeholder="Player 23 (Visit Visa)" required = "" />
                  </div>

                  <div class = "form-group">
                  
                    <input type = "text" class = "form-control"  name = "Player_24" placeholder="Player 24 (Visit Visa)"required = "" />
                  </div>

                  <br />
                   <br>

                   <div class = "form-group">
                    <label>Manager’s Contact No:</label>
                    <input type = "text" class = "form-control"  name = "M_Contact" required = ""/>
                  </div>
                  <div class = "form-group">
                    <label>Email :</label>
                    <input type = "text" class = "form-control"  name = "M_Email" required = ""/>
                  </div>
                  <br>
                   <br>
                  <div class = "form-group">
                    <label>Captain’s Contact No :</label>
                    <input type = "text" class = "form-control"  name = "C_Contact" required="  "/>
                  </div>
                  <div class = "form-group">
                    <label>Email :</label>
                    <input type = "text" class = "form-control"  name = "C_Email" required = ""/>
                  </div>
                  <br>
              
                  <div class = "form-group">
                   <input type="submit" class="btn btn-primary form-control" name="submit"  value="Register" style="width: 110%; height: auto;">
                  </div>
               
                   <div class = "form-group">
                    <a  href="Team_List.php" type="button" class = "btn btn-back form-control"  name = "back" style="width: 105%; height: auto;"> Back </a>
                  </div>
                               
                </div>  
              </form>   





</div> 
 <!-- end of aside -->
  
<!-- <div class="footer">
  <a href="http://nakheellandscapes.com/" target="_blank"><img src="../images/Nakheel Logo2.png"> Al Nakheel Landscapes</a>. © 2017, All Rights Reserved
  <span style="float:right;" > POWERED BY: <img src="../images/BlueMedia1.png"> <a href="http://www.qatpedia.com/company/qatar/blue-media-networks-doha" target="_blank"> Blue Media Networks </span>  
</div> -->
 <!-- end of footer -->


</body>
</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->