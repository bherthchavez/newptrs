<!DOCTYPE html>
<?php
   require_once '../connect.php';
   require_once 'session.php';
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Player Info</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Player Registration </button>
                </li>
              
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Team Registration</button>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"> <?php echo  $_SESSION['Team_Name'];?> </span>
                    <span class="online-status"></span>
                    <img src="../../images/faces/face28.png" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <!-- <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a> -->
                      <a href="logout.php" class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
  
    </div>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
                  
                  <?php 
                   $query = $conn->query("SELECT * FROM players WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                   $valid = $query->num_rows;
                   $fetch = $query->fetch_array();
                   ?> 

        <div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Date Added</h3>
									<h6 class="font-weight-normal mb-2"> 
                  <?php
                   $date =$fetch['Date']; 
                       echo date('M d, Y / h:i:s', strtotime($date));
                  ?>
                   </h6>
                </div>
                
								   <div class="ml-lg-5 d-lg-flex d-none">
                    <a href="Print_Player.php?id=<?php echo $fetch['id']?>" type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Print
											<i class="mdi mdi-printer btn-icon-append"></i>                          
                    </a>
									
								</div>
							</div>
            </div>
            
						<div class="col-sm-6">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pr-1 mb-3 mb-xl-0">
										<a href="Add_Player.php" type="button" class="btn btn-outline-inverse-info btn-icon-text name = "back> 
											Add New
											<i class="mdi mdi-account-plus btn-icon-append"></i>                          
                    </a>
								</div>
								<div class="pr-1 mb-3 mb-xl-0">
										<a href="Update.php?id=<?php echo $fetch['id']?>"  type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Update
											<i class="mdi mdi-account-check btn-icon-append"></i>                          
                    </a>
								</div>
								<div class="pr-1 mb-3 mb-xl-0">
										<a href = "Delete.php?id=<?php echo $fetch['id']?>" onClick="return confirm('Are you sure you want to delete this player?');" type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Delete
											<i class="mdi mdi-delete btn-icon-append"></i>                          
                    </a>
								</div>
							</div>
						</div>
					</div>  


        
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Player Info</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of the Team</label>
                      <input type = "text" class = "form-control"  name = "Team_Name" value = "<?php echo $fetch['Team_Name']?>" disabled=""/>
                    </div>

                     <div class="form-group">
                      <label for="exampleInputUsername1">DISTRICT</label>
                      <input type = "text" class = "form-control"  name = "DISTRICT" value = "<?php echo $fetch['District']?>" disabled=""/>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name as in Passport</label>
                      <input type = "text" class = "form-control"  name = "Passsport_Name" value = "<?php echo $fetch['Name_in_Passport']?>" disabled="" />
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Passport No.</label>
                      <input type = "text" class = "form-control"  name = "Passport_No" value = "<?php echo $fetch['Passport_No']?>" disabled=""/>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Qatar I.D No.</label>
                      <input type = "text" class = "form-control"  name = "QID" value = "<?php echo $fetch['Qatar_ID']?>" disabled=""/>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputUsername1">Validity</label>
                      <input type = "text" class = "form-control"  name = "Validity" value = "<?php echo $fetch['Validity']?>" disabled="" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Date of Birth  (Eg. 12 Aug 1987)</label>
                      <input type = "text" class = "form-control"  name = "Bday" value = "<?php echo $fetch['Date_of_Birth']?>" disabled="" />
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Tel (Doha)</label>
                      <input type = "text" class = "form-control"  name = "Tel" value = "<?php echo $fetch['Tel']?>" disabled="" />
                    </div>


                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
               
                  <form class="forms-sample">

                    <div class="form-group">
                      <label for="exampleInputUsername1">Photo</label>
                      <br>
                      <!-- <img src="../../images/faces/face13.jpg" class="lock-profile-img" alt="img"> -->
                      <img onerror="this.src = '<?php 
                                                if($fetch['image_name'] == "default.png")
                                                {
                                                  echo "../images/".$fetch['image_name'];
                                                }
                                                else
                                                {echo "../Photos/".$fetch['image_name'];
                                                }?>
                                                '" height = "200px" width = "200px" id="pic" src="#"/>

                      <br>
                      <a href="../Photos/<?php echo $fetch['image_name']?>" type="button" class="btn btn-primary btn-sm" title='Download' download><i class="mdi mdi-download"></i> Download</a>
                    </div>
                    
                   
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of the Sponsor</label>
                      <input type = "text" class = "form-control"  name = "Sponsor" value = "<?php echo $fetch['Name_of_Sponsor']?>" disabled="" />
                    </div>

                  

                    <div class="form-group">
                      <label for="exampleInputUsername1">Address as in the Passport with Telephone No(India)</label>
                      <textarea name="Address" style="height:100px; resize:none;" class="form-control" disabled="" ><?php echo $fetch['Address']?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Passport copy with address page</label>
                      <br>
                      <a href="../files/<?php echo $fetch['Passport_Name']?>" type="button" class="btn btn-link btn-fw" title='Download' download>1. Download Passport Front View</a>
                      <a href="../files/<?php echo $fetch['Passport_Back']?>" type="button" class="btn btn-link btn-fw" title='Download' download>2. Download Passport Back View</a>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Qatar ID Copy</label>
                      <br>
                      <a href="../files/<?php echo $fetch['QID_Name']?>" type="button" class="btn btn-link btn-fw" title='Download' download>1. Download QID Front View</a>
                      <a href="../files/<?php echo $fetch['QID_Back']?>" type="button" class="btn btn-link btn-fw" title='Download' download>2. Download QID Back View</a>
                    </div>

                  
                  
                  </form>
                </div>
              </div>
            </div>
         
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="footer-wrap">
              <div class="w-100 clearfix">
                <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="https://www.templatewatch.com/" target="_blank">templatewatch</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart-outline"></i></span>
              </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
