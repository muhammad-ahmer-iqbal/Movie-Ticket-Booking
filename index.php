<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Ticket.com</title>

    <!-- bootstrap 5 Start -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- bootstrap 5 End -->

    <!-- Fontawesome External Files -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fontawesome External Files End -->

    <!-- Custom Style Css Start -->

    <link rel="stylesheet" href="stylesheet\style.css">

    <!-- Custom Style Css End -->
    

</head>

<body>

    <!-- Sub-header Start -->

    <?php include 'header.php'; ?>

    <!-- Sub-header End -->

    <!-- Banner Start -->

    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/slide-1.png" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/GRM_banner-f9.jpeg" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/army-of-the-dead-gd.jpg" class="d-block" alt="Moive-Img">
                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg sticky-top bg mb-4 navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets\Logo.png" class="img-fluid" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="on-show.php">On Show</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="coming-soon.php">Coming Soon</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="theater.php">Theater</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link border-right" href="register.php">Register Now </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Index Center Content Start -->

    <div class="container mb-5">

        <div class="movie my-5">
            <div class="heading">
                <h2>On Show</h2>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="Tom-and-jerry-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="how-to-train-your-dragon-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-2.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="Rio-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-3.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="The-baby-boss-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-4.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div> 

        <div class="read-more text-center">
            <a href="on-show.php">
                See More
            </a>
        </div>

        <div class="movie my-5">
            <div class="heading">
                <h2>Coming Soon</h2>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="f9-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-13.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="major-grom-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-14.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="army-of-the-dead-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-15.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="wonder-women-movie.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/card-16.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h6>Publishing Date</h6>
                            <h5>17 Feb,</h5>
                            <h5>2021</h5>

                            <h6>Release Date</h6>
                            <h5>26 Feb,</h5>
                            <h5>2021</h5>

                            <h6>View</h6>
                            <h5>100616</h5>

                            <h6>Downloads</h6>
                            <h5>29085</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="read-more text-center">
            <a href="coming-soon.php">
                See More
            </a>
        </div>

        <div class="movie my-5">
            <div class="heading">
                <h2>Theaters</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="theater-inner-page.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/Theater-1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h1>Neuplex Theater</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="theater-inner-page.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/Theater-1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h1>Neuplex Theater</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="theater-inner-page.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/Theater-1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h1>Neuplex Theater</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="content">
                    <a href="theater-inner-page.php">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="./assets/Theater-1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h1>Neuplex Theater</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="read-more text-center">
            <a href="theater.php">
                See More
            </a>
        </div>

    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->

</body>

</html>