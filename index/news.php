<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scheduling System</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>

<body>

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        High Way Diplahan Zamboanga Sibugay
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            Diplahanchurch@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/diologo.jpg" class="logo img-fluid" alt="">
                <span>
                   Our Lady of Pillar Parish
                    <small>Diplahan church</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php#section_2">About</a>
                    </li>

                  

                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php#section_5">News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php#section_6">Contact</a>
                    </li>

                    
                   
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">News Listing</h1>
                    </div>

                </div>
            </div>
        </section>

       

        

      
        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Latest News</h2>
                    </div>
                    <?php
                require_once "config.php"; 
                $result = mysqli_query($conn,"SELECT * FROM updates order by postingdate DESC LIMIT 4");
                if (mysqli_num_rows($result) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
?>
<?php
//insert something here para sa monthly announcement
                    if ($i % 2 == 0){      
                     
?>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news.php">
                                    <img src="../html//pictures/activities/<?php echo $row["container"];?>" alt="..."
                                        class="news-image img-fluid" alt="">
                                </a>

                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            <?php echo $row["postingdate"];?>
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                      
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link"><?php echo $row["title"];?></a></h4>
                                </div>

                                <div class="news-block-body">
                                    <div class="timeline-body">
                                        <h3><p class="text-muted"><?php echo $row["details"];?></p></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    else{  
?>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="pictures/activities/<?php echo $row["container"];?>" alt="..."
                                        class="news-image img-fluid" alt="">
                                </a>

                         
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            <?php echo $row["postingdate"];?>
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                      
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            35 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                <h4><a href="news-detail.html" class="news-block-title-link"><?php echo $row["title"];?></a></h4>
                        
                                </div>

                                <div class="news-block-body">
                                <div class="timeline-body">
                                    <h3><p class="text-muted"><?php echo $row["details"];?></p></h3>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php
                } 
?>
             

<?php

                      $i++;
                    }
                }
                else{
                echo "No result found";
                }
?>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/africa-humanitarian-aid-doctor.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/close-up-happy-people-working-together.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 24, 2036
                                    </p>
                                </div>
                            </div>
                        </div>


           

                        <form class="custom-form subscribe-form" action="#" method="post" role="form">
                            <h5 class="mb-4">Newsletter Form</h5>

                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Email Address" required>

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/diologo.jpg" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="Phone: 945-395-0062" class="site-footer-link">
                            945-395-0062
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            Diplahanchurch@gmail.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        High Way Diplahan Zamboanga Sibugay
                    </p>

                    <a href="#" class="custom-btn btn mt-3"></a>
                </div>
            </div>
        </div>

       

                   

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>