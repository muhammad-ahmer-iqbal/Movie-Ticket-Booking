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
    <hr class="hr">
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
                        <a class="nav-link" href="index.php">Home</a>
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

    <!-- Movies Center Content Start -->

    <div class="movie-center-content">
        <div class="container">
            <div class="movie my-4">
                <div class="heading">
                    <h2>On Show</h2>
                </div>
            </div>
            <div class="movie-heading my-4">
                <h2>TOM AND JERRY</h2>
            </div>
            <div class="row my-4">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="movie-img">
                                <img src="assets\card-1.jpg" class="img-fluid" width="100%" alt="Movie">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="trailer">
                                <button type="button" class="btn btn-danger my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span><i class="fa fa-play"></i>
                                    </span> Watch Trailer
                                </button>
                            </div>
                            <div class="movie-detail">
                                <div class="detail-heading">
                                    <div class="row">
                                        <div class="col-6">

                                            <h6>Director</h6>
                                            <h6>Writer</h6>
                                            <h6>Release Date</h6>
                                            <h6>Genre</h6>
                                            <h6>Run Time</h6>
                                            <h6>Language</h6>
                                            <h6>Tag Line</h6>
                                            <h6>Rating</h6>

                                        </div>
                                        <div class="col-6">

                                            <h6>: Tim Story</h6>
                                            <h6>: William Hanna</h6>
                                            <h6>: Feb 26 2021</h6>
                                            <h6>: Animation.</h6>
                                            <h6>: 1h 41min</h6>
                                            <h6>: English, Hindi</h6>
                                            <h6>: On Show</h6>
                                            <h6>:
                                                <a href="https://www.imdb.com/title/tt1361336/" target="_blank">
                                                    <span class="rate-text">IMDB</span>
                                                    <span class="rate-no">5.3</span>
                                                </a>
                                            </h6>

                                        </div>
                                    </div>
                                    <div class="story-line mt-3">
                                        <h5>Storyline</h5>
                                        <p>Adaptation of the classic Hanna-Barbera property,
                                            which reveals how Tom and Jerry first meet and form their rivalry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="movie my-5">
                            <div class="heading">
                                <h2>Related Movie</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#">
                                
                                    <div class="movie-related-card">
                                        <img src="./assets/card-2.jpg" width="100%" alt="card">
                                        <p class="my-3 fw-bold text-center">How To Train Your Dragon</p>
                                    </div>

                                </a>

                            </div>
                            <div class="col-lg-4">
                                <a href="#">

                                    <div class="movie-related-card">
                                        <img src="./assets/card-3.jpg" width="100%" alt="card">
                                        <p class="my-3 fw-bold text-center">Rio</p>
                                    </div>

                                </a>

                            </div>
                            <div class="col-lg-4">
                                <a href="#">

                                    <div class="movie-related-card">
                                        <img src="./assets/card-6.jpg" width="100%" alt="card">
                                        <p class="my-3 fw-bold text-center">The Donkey King</p>
                                    </div>

                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="movie mt-2 mb-5">
                        <div class="heading">
                            <h4>Recent</h4>
                        </div>
                    </div>
                    <a href="#">

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-lg-4">
                                    <img src="./assets/card-2.jpg" width="100%" class="img-fluid rounded-start" alt="Card">
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger">How To Train Your Dragon</h5>
                                        <p class="card-text">Long ago up North on the Island of Berk, the young Viking,
                                            Hiccup, wants to join his town's fight against the dragons that continually
                                            raid their town.
                                        </p>
                                        <p class="card-text"><small class="text-muted">On Show</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a href="#">

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-lg-4">
                                    <img src="./assets/card-3.jpg" width="100%" class="img-fluid rounded-start" alt="Card">
                                </div>
                                <div class="col-lg-8 ali align-self-centergn-self-center">
                                    <div class="card-body ">
                                        <h5 class="card-title text-danger">Rio</h5>
                                        <p class="card-text">In Rio de Janeiro, baby macaw, Blu, is captured by dealers and
                                            smuggled to the USA. While driving through Moose Lake, Minnesota, the truck
                                            that is transporting Blu accidentally drops Blu's box on the road.
                                        </p>
                                        <p class="card-text"><small class="text-muted">On Show</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a href="#">

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-lg-4">
                                    <img src="./assets/card-4.jpg" width="100%" class="img-fluid rounded-start" alt="Card">
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <div class="card-body ">
                                        <h5 class="card-title text-danger">The Baby Boss</h5>
                                        <p class="card-text">Seven-year-old Tim Templeton has always been a boy of an overactive
                                            imagination, and for the past seven years, life was all peaches for him, getting
                                            all the love and affection from his caring parents.
                                        </p>
                                        <p class="card-text"><small class="text-muted">On Show</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a href="#">

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-lg-4">
                                    <img src="./assets/card-5.jpg" width="100%" class="img-fluid rounded-start" alt="Card">
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <div class="card-body ">
                                        <h5 class="card-title text-danger">Jawani Phir Nahi Ani</h5>
                                        <p class="card-text">Sheikh (Vasay Chaudhry) and Pervez (Ahmed Ali Butt) are now settled
                                            back into their mundane lives when suddenly Pervez's brother-in-law, Rahat
                                            (Fahad Mustafa), who had been out of touch for the past 10 years.
                                        </p>
                                        <p class="card-text"><small class="text-muted">On Show</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Movies Center Content End -->

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

    <!-- Trailer Modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">TOM AND JERRY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/kP9TfCWaQT4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trailer Modal End -->

</body>

</html>