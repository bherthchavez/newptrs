<!DOCTYPE html>
<?php
  require_once 'session.php';
 ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Player List</title>
  <link rel="icon" href="../images/QIFFicon.png">
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->


  

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
          <ul class="navbar-nav navbar-nav-left">
								<li class="nav-item ml-0 mr-5 d-lg-flex d-none">
									<a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
								</li>
								
								<li class="nav-item nav-search d-none d-lg-block ml-3">
									<div class="input-group">
										<div class="input-group-prepend">
										<span class="input-group-text" id="search">
											<i class="mdi mdi-magnify"></i>
										</span>
										</div>
										<input type="text" class="form-control" placeholder="search player" aria-label="search" aria-describedby="search">
									</div>
								</li>	
								</ul>
              <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
                  <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
              </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Player Registration </button>
                </li>
                
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Team Registration </button>
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

      <nav class="bottom-navbar">
        <div class="container">
          
            <ul class="nav page-navigation">
             
            <li class="nav-item d-lg-flex align-items-center ">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Player Registration </span>
                </a>
              </li>

              <li class="nav-item d-lg-flex align-items-center ">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Player Registration </span>
                </a>
              </li>
              

            </ul>
        </div>
      </nav>

      
    </div>


        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
                      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                
                  <h4 class="card-title">Player List</h4>

                  <?php
                          // connect to the database
                          include('../connect.php');

                          // get the records from the database
                          if ($result = $mysqli->query("SELECT * FROM players  ORDER BY id"))
                          {
                          // display records if there are records to display
                          if ($result->num_rows > 0)
                          {
                            echo" <div class=\"scrollWrapper \">";

                            echo" <div class=\"table-responsive \">

                            <table class=\"table table-striped table-hover\">";

                            echo"  <thead>";
                            echo "  <tr class=\"text-light bg-dark pl-1\">
                                      <th class=\"text-light \"> Photo </th>
                                      <th class=\"text-light \"> Player name </th>
                                      <th class=\"text-light \"> Team Name </th>
                                      <th class=\"text-light \"> Date Added </th>
                                      <th class=\"text-light \"> Passport Attachment </th>
                                      <th class=\"text-light  \"> QID Attachment </th>

                                      <th>  </th>
                                     </tr>";
                                echo" </thead>";

                                while ($row = $result->fetch_object())
                                {
                                // set up a row for each record

                               

                                echo"<tbody>";
                                echo" <tr>";
                                        echo" <td class=\"py-1\"> <img src ='../Photos/" . $row->image_name ."' alt=\"image\"/> </td>";
                                        echo "<td class=\"text-primary\"> <a href='View.php?id=" . $row->id . "' type\"button\" class = \"btn btn-link btn-rounded btn-fw\" title='View'>    " . $row->Name_in_Passport . "</a></td>";
                                        echo '<td>' . $row->Team_Name .'</td>';
                                        echo '<td>'. $row->Date . '</td>';

                                        echo "<td>  <center> <a href='../files/" . $row->Passport_Name . "' type=\"button\" class = \"mdi mdi-cloud-download\" title='Download' Download>  Passport Front   </a> 
                                        <br/>
                                        <center>   <a href='../files/" . $row->Passport_Back . "' type=\"button\" class = \"mdi mdi-cloud-download\" title='Download' Download> Passport Back  </a> </td>";
                                 
                                         echo "<td> <center>   <a href='../files/" . $row->QID_Name . "' type=\"button\" class = \"mdi mdi-cloud-download\" title='Download' Download> QID Front </a> 
                                         <br/>
                                          <center>   <a href='../files/" . $row->QID_Back ."' type=\"button\" class = \"mdi mdi-cloud-download\" title='Download' Download> QID Back  </a> </td>";
              
                                          echo "<td> <center>  <a href='View.php?id=" . $row->id . "' type\"button\" class = \"btn btn-dark btn-rounded btn-fw\" title='View'>  View</a> <center>";
                   
                                 
                                         echo "</tr>";
                                }


                              echo " </tbody>";
                              
                              echo "</table>";
                              echo "</div>";
                              echo "</div>";
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
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
