<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Sharp Edge')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid header-top">
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="/" class="navbar-brand" style="height: 125px;">
                        <img src="img/logo-white.png" alt="Logo" width="150px">
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="border-end border-primary pe-3">
                                        <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Located Here</a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="mailto:info@sharpedge.net.in" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>info@sharpedge.net.in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex border-end border-primary pe-3">
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"><small class="text-body"><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                        <div class="dropdown-menu">
                                            <a href="/" class="dropdown-item">English</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <a href="/" class="navbar-brand-2">
                                <img src="img/logo-white.png" alt="Logo" width="150px">
                            </a>  
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto bg-white">
                                    <a href="index.html" class="nav-item nav-link active">Home</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                            <span class="dropdown-toggle">About Us</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="/activities" class="dropdown-item">Activities</a>
                                            <a href="/core-team" class="dropdown-item">Core Team</a>
                                            <a href="/about-us" class="dropdown-item">Institution</a>
                                            <a href="/investors" class="dropdown-item">Investors</a>
                                            <a href="/partners" class="dropdown-item">Partners</a>
                                        </div>
                                    </div>
                                    <a href="/services" class="nav-item nav-link">Services</a>
                                    <a href="/portfolio" class="nav-item nav-link">Portfolio</a>
                                    <a href="/blog" class="nav-item nav-link">Blog</a>
                                    <a href="/contact" class="nav-item nav-link">Contact</a>
                                    <div class="nav-btn ps-3">
                                        <button class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                        <a href="/get-consulting" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3">Get Consulting</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
         
        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <img src="img/logo-white.png" alt="Logo" width="250px">
                                <p class="mb-3">We bring together industry expertise and innovative strategies to support your business growth and operational success. Reach out, and let's build a stronger future together.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="/faq"> FAQ</a>
                            <a href="/careers"> Careers</a>
                            <a href="/get-consulting"> Get Consulting</a>
                            <a href="/csr-activities"> CSR Activities</a>
                            <a href="/terms-and-conditions"> Terms & Conditions</a>
                            <a href="/privacy-policy"> Privacy Policy</a>
                            <a href="/news-and-notifications"> News & Notifications</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Offered services</h4>
                            <a href="/services/marketing-consulting"> Marketing Consulting</a>
                            <a href="/services/legal-consulting"> Legal Consulting</a>
                            <a href="/services/human-resource-consulting"> HR Consulting</a>
                            <a href="/services/strategic-consulting"> Strategic Consulting</a>
                            <a href="/services/information-technology-consulting"> IT Consulting</a>
                            <a href="/services/operations-and-maintenance-consulting"> O&M Consulting</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@sharpedge.net.in"><i class="fas fa-envelope text-primary me-2"></i> info@sharpedge.net.in</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone text-primary me-2"></i> +91 9861 064 774</a>
                            <a href="/" class="mb-3"><i class="fas fa-globe text-primary me-2"></i> www.sharpedge.net.in</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-md-square me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-md-square me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-md-square me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-light btn-md-square me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="/" class="text-white">&copy;Sharp Edge</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="text-white" href="https://www.infutech.in">Infutech</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>