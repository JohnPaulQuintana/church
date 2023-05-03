<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Scheduling System</title>

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

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
<body>



<div class="portfolio-modal "  role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-body">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Message</h4>
                            <p><td>
                                <?php
                                    require_once "config.php";
                                        $result = mysqli_query($conn,"select * from contactus where ID='" . $_GET['id'] . "'");
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo $row["message"];  
                                                }
                                            }
                                ?>
                            </td></p>
                            <p class="mb-0"></p>

                            <div class="clearfix">
                                <a href="messages.php"><button type="button"  name="close" class="btn btn-primary sm">Close</button></a>
                            </div>

                </div> 
            </div>
        </div>
    </div>
</div>


     <!-- Bootstrap core JS-->
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    </body>
</html>