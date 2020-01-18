<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- old code -->
  <title>QIFF User Login</title>
  <link rel="stylesheet" href="css/style_log.css">
  <link rel="icon" href="images/QIFFicon.png">  
<!-- new code -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
   <link rel="stylesheet" href="../../css/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>


<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              
              <form class="pt-3" method = "POST" enctype = "multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="password" placeholder="Password">                        
                  </div>
                </div>
           
                <div id = "loading">

                </div>
                <div class="my-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id = "login" >LOGIN</a>
                </div>
               
              </form>


            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>

  <script src="../../js/template.js"></script>
                  
</body>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src = "js/jquery-3.1.1.js"></script>
    <script  src="js/index.js"></script>
    <script src = "js/script.js"></script>
</html>


<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->