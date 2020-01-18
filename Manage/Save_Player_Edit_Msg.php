<!DOCTYPE html>
<?php
  
  require_once 'session.php';

?>
<html>
<title> Successfuly Saved </title>
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
      margin-right: 88px;
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
.col-10 {width: 83.33%;}
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
.form-group {
    margin-bottom: 4px;
}
</style>

<div class="header">
 
 <a href="Home.php"> <img id="ea3" src="../images/Header.png" style="width: 100%; height: auto;" > </a>
 
 
  
</div> 
<!-- end of header  -->
<div class="aside">
<div class="row">


<form method = "POST" enctype = "multipart/form-data" action = "Save_Player.php">
               
    
          <center>
               <!--  <h3 style="color: #c00000;"> 11th Inter District Football Tournament 2017
                Details of participating Team & Player. </h3> -->
</center>
<br>
<br>
<div class = "col-5">
                   <h3 style="color: #0aaa00;">Player Updated Successfully.</h3>


                     <div class = "form-group">
                    <a  href="Add_Player.php" class = "btn btn-primary form-control" name = "back" type="button" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Add New Player</a>
                     <a  href="Player.php" type="button" class = "btn btn-back form-control" name = "back" style="width: 100%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>View List</a>
                  </div>
                   <br/>

                  <div class = "form-group">
                    <label>Name of the Team</label>
                    <input type = "text" class = "form-control"  name = "Team_Name" required = "required"/>
                  </div>
                  <div class = "form-group">
                    <label>DISTRICT</label>
                    <input type = "text" class = "form-control"  name = "DISTRICT" required = "required"/>
                  </div>
                  <div class = "form-group">
                    <label>Name as in Passsport</label>
                    <input type = "text" class = "form-control"  name = "Passsport_Name" />
                  </div>
                  <div class = "form-group">
                    <label>Passport No.</label>
                    <input type = "text" class = "form-control"  name = "Passport_No" required = "required"/>
                  </div>

                   <div class = "form-group">
                    <label>Qatar I.D No.</label>
                    <input type = "text" class = "form-control"  name = "QID" required = "required"/>
                  </div>
                 
                  <div class = "form-group">
                    <label>Validity</label>
                    <input type = "text" class = "form-control"  name = "Validity"/>
                  </div>
                  <br>
                  <br>
                   <div class = "form-group">
                    <label>Date of Birth</label>
                    <input type = "text" class = "form-control"  name = "Bday"/>
                  </div>
                   <div class = "form-group">
                    <label>Name of the Sponsor</label>
                    <input type = "text" class = "form-control"  name = "Sponsor"/>
                  </div>
                   <div class = "form-group">
                    <label>Tel (Doha)</label>
                    <input type = "text" class = "form-control"  name = "Tel"/>
                  </div>
                  <div class = "form-group">
                    <label>Address as in the Passport with Telephone No(India)</label>
                    <textarea name="Address" style="height:100px; resize:none;" class="form-control" required="required"></textarea>
                  </div>
                 
                </div>  


 <div class = "col-4">
                 <label>Photo</label>
                  <div id = "picture">
                    <img onerror="this.src = '../images/default.png'" height = "200px" width = "200px" id="pic" src="#" />
                  </div>
                  <!-- <br /> -->
                  <div class = "form-group">
                    <input type='file' onchange="readURL(this);" name = "image" />
                  </div>

                  <br />
                  <br />
                
                      
                   <div class = "form-group">
                    <label>Passport copy with address page </label>
                    <br />
                    <br>
                    <input type='file' onchange="readURL(this);" name = "image" />
                  </div>

                 <br />
                  <br />
                  <br />

                  <div class = "form-group">
                    <label> Qatar ID Copy </label>
                    <br />
                    <br>
                    <input type='file' onchange="readURL(this);" name = "image" />
                  </div>

                 <br />
                  <br />
                  <div class = "form-group">
                  <input type="checkbox" name="test" value="value1">
                    <u> <strong> Declaration  </strong></u>
                    <p> I agree to abide by the rules  and regulations of the Qatar Indian Football forum  and affirm that all the details furnished in the registration form are correct.</p>
                    </div>

                 <br />
               
                
                 
                </div>






              </form>   
</div>
</div> 
 <!-- end of aside -->
  
<!-- <div class="footer">
  <a href="http://nakheellandscapes.com/" target="_blank"><img src="../images/Nakheel Logo2.png"> Al Nakheel Landscapes</a>. © 2017, All Rights Reserved
  <span style="float:right;" > POWERED BY: <img src="../images/BlueMedia1.png"> <a href="http://www.qatpedia.com/company/qatar/blue-media-networks-doha" target="_blank"> Blue Media Networks </span>  
</div> -->
 <!-- end of footer -->



<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
            .css('display', 'block');
          $('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

</body>
</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->