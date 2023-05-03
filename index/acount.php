<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>login</title>

    <meta name="description" content="" />

 

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                
        
                  </span>
                  <span class="app-brand-text demo text-body fwr">Admin</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome </h4>
              <p class="mb-4">Please sign-in to your account</p>

              <form action="createform.php" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputname">name</label>
                                        <input type="name" name="name" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">position</label>
                                        <input type="position" name="position" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter position">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">usertype</label>
                                        <input type="usertype"  name="usertype" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter usertype">
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputusername">username</label>
                                        <input type="username" name="username" class="form-control" name="exampleInputusername" aria-describedby="emailHelp" placeholder="Enter username">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password"  class="form-control" name="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Confirm Password</label>
                                        <input type="password" name="comfirmpassword"  class="form-control" name="exampleInputPassword1" placeholder="Confirm Password">
                                    </div>
                                   
                                    <button type="submit" name="save" class="btn btn-primary">Create</button>
                                   
                                    <a href="admin.php" type="submit" class="btn btn-primary">Exit</a>
                                    </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
