<!DOCTYPE php>

<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.icon" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
       
        </header>
   
       
      


 <!-- services begin here  ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
 <section class="page-section" id="parishservices">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PARISH SERVICES</h2>
                    <h3 class="section-subheading text-muted">Our Latest Parish Services Offer!</h3>
                </div>
                <ul class="timeline">
<?php
                require_once "config.php"; 
                $result = mysqli_query($conn,"SELECT * FROM services");
                if (mysqli_num_rows($result) > 0) {
                    $ii=0;
                    while($row = mysqli_fetch_array($result)) {
?>

<?php

                    if ($ii % 2 == 0){      
                     
?>
                    
                    <li>
                        
                        <div class="timeline-image"><img class="rounded-avatar img-fluid" src="pictures/services/<?php echo $row["picture"];?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"><?php echo $row["services"];?></h4>
                            </div>
                            <p><strong><?php echo $row["detail"];?></strong></p>
                            <div class="timeline-body"><p class="text-muted"><?php echo $row["schedule"];?></p></div>
                            <a class="medium" href="#portfolioModal4">Go to Schedule</a>
                        </div>
                    </li>

<?php
                    }
                    else{  
?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-avatar img-fluid" src="pictures/services/<?php echo $row["picture"];?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"><?php echo $row["services"];?></h4>
                            </div>
                            <p><strong><?php echo $row["detail"];?></strong></p>
                            <div class="timeline-body"><p class="text-muted"><?php echo $row["schedule"];?></p></div>
                            <a class="medium" href="#portfolioModal4">Go to Schedule</a>
                        </div>
                    </li>
<?php
                } 
?>
             
<?php

                      $ii++;
                    }
                }
                else{
                echo "No result found";
                }
?>

            </div>           
        </section>        
 <!-- services end here  ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>


 
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
