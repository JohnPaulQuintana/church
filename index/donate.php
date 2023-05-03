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

                        <a href=" Diplahanchurch@gmail.com">
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
            <a class="navbar-brand" href="index.php">
                <img src="images/diologo.jpg" class="logo img-fluid" alt="">
                <span>
                    Our lady of Pillar Parish
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
                        <a class="nav-link click-scroll" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php#section_5">News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_6">Contact</a>
                    </li>

                   
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        
                    <form action="adddonation.php" method="post" enctype="multipart/form-data" class="custom-form donate-form">
                            
                            <h3 class="mb-4">Make a donation</h3>
                               
                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Select an amount</h5>
                                </div>

                              

                                <div class="col-lg-6 col-12 form-check-group">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">P</span>
                                        <input type="number" name="amount" class="form-control" placeholder="Custom amount"
                                            aria-label="Username" aria-describedby="basic-addon1" />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Personal Info</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Juan Dela Cruz" required />
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com"
                                        required />
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">Proof of Donation</h5>
                                </div>

                                <div class="form-group">
                                    <input type="file" name="file" id="file" class="input-file">
                                        <label for="file" class="btn btn-tertiary js-labelFile">
                                            <i class="icon fa fa-check"></i>
                                        </label>
                                </div>

                                    <button type="submit" name="save" class="form-control mt-4">Submit Donation</button>
                                
                                </form>

                            </div>
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