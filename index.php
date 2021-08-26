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

    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="icon-div">
                    <div class="icon float-end">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <img src="./assets/slide-1.png" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/slide-1.png" class="d-block" alt="Moive-Img">
                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg sticky-top bg mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets\Logo.png" alt="Logo" width="100">
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
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Movies
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">On Show</a></li>
                            <li><a class="dropdown-item" href="#">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Theater
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link border-right" href="#">Register Now </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Index Center Content Start -->

    <div class="index-center-content mb-4">
        <div class="container">
            <div class="movie mb-4">
                <div class="heading">
                    <h2>Latest Moives</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="Tom-and-jerry-movie.php" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-1.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Tom And Jerry</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="how-to-train-your-dragon-movie.php" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-2.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">How Train Your Dragon</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="Rio-movie.php" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-3.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Rio</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="The-baby-boss-movie.php" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-4.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">The Baby Boss</h5>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-5.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Jawani Phir Nahi Ani 2</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-6.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">The Donkey King</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-7.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Teefa In Trouble</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-8.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Parchi</h5>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-9.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">V</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-10.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Mafia</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-11.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Cold Case</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-12.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">A1 Express</h5>
                        </div>
                    </a>
                </div>
            </div>



            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-13.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Fast And Furious 9</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-14.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Major Grom</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-15.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Army Of The Dead</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="#" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./assets/card-16.jpg" alt="Avatar" style="width:100%;height:320px;">
                                </div>
                                <div class="flip-card-back">

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
                            </div>
                            <h5 class="movie-text text-center pt-2">Wonder Women 1984</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <footer>
        <div class="container">
            <div class="row">
                <p class="text-center">
                    Copyrights © 2021 ticket.com
                </p>
                <p class="text-center">
                    ticket.com is not responsible for the content of external internet sites.
                </p>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

</body>

</html>