<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom And Jerry - Ticket.com</title>

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
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

</head>

<body>

    <!-- Sub-header Start -->

    <?php include 'header.php'; ?>

    <!-- Sub-header End -->
    <hr class="hr">
    <!-- Navbar Start -->

    <?php include 'navbar.php'; ?>

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
                <h2>RIO</h2>
            </div>
            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="movie-img">
                        <img src="assets\card-3.jpg" class="img-fluid" width="100%" alt="Movie">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="trailer">
                        <button type="button" class="full-btn btn btn-danger my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        <a href="https://www.imdb.com/title/tt1436562/?ref_=fn_al_tt_1" target="_blank">
                                            <span class="rate-text">IMDB</span>
                                            <span class="rate-no">6.9</span>
                                        </a>
                                    </h6>

                                </div>
                            </div>
                            <div class="story-line mt-3">
                                <h5>Storyline</h5>
                                <p>
                                    Rio (marketed as Tom & Jerry: The Movie)[5] is a 2021 American live-action/computer-animated slapstick comedy film based on the titular cartoon characters of the same name created by William Hanna and Joseph Barbera, produced by the Warner Animation Group and distributed by Warner Bros. Pictures. It is the second theatrical film based on the characters following 1992's Tom and Jerry: The Movie. The film follows Tom teaming up with a young employee named Kayla to exterminate Jerry, a mouse who takes refuge in New York City's fanciest hotel, before his presence threatens the hotel and its important wedding set to take place on the hotel grounds.
                                </p>
                                <p class="mt-2">
                                    The was theatrically released by Warner Bros. Pictures in the United States on February 26, 2021, along with a one-month simultaneous streaming release on HBO Max. The film has grossed over $131 million on a $79 million budget and received generally negative reviews from critics, who criticized the human characters and screenplay.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-5">
                    <hr>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="terms-and-condition">
                            <h4>Terms And Condition</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, rerum deserunt id nulla iste doloribus voluptate delectus tempora quos similique illum tenetur corporis consequatur, dolorem eligendi. Ab, quae provident? Veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, rerum deserunt id nulla iste doloribus voluptate delectus tempora quos similique illum tenetur corporis consequatur, dolorem eligendi. Ab, quae provident? Veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, rerum deserunt id nulla iste doloribus voluptate delectus tempora quos similique illum tenetur corporis consequatur, dolorem eligendi. Ab, quae provident? Veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, rerum deserunt id nulla iste doloribus voluptate delectus tempora quos similique illum tenetur corporis consequatur, dolorem eligendi. Ab, quae provident? Veritatis?</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="theater">
                            <h4 class="mb-3">Available In Theaters</h4>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="content">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#booking">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="./assets/card-2.jpg">
                                            <div class="content-details fadeIn-bottom">
                                                <button class="btn book-btn btn-danger">Book Now</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="content">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#booking">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="./assets/card-2.jpg">
                                            <div class="content-details fadeIn-bottom">
                                                <button class="btn book-btn btn-danger">Book Now</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="my-5">
                <hr>
            </div>

            <div class="review mb-5">
                <h4 class="mb-4">Review</h4>
                <form class="review-mess">
                    <label for="textarea" class="form-label text-start">Rating Stars <br>
                        <span class="text-end">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                            </fieldset>
                        </span>
                    </label>
                    <textarea class="form-control mb-3" id="textarea" placeholder="Message" rows="3"></textarea>
                    <button type="submit" class="btn btn-outline-danger text-light border-2">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Movies Center Content End -->

    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->

    <!-- Trailer Modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">RIO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/P1GRO31ve5Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Trailer Modal End -->

    <!-- booking Now Start -->

    <!-- Modal -->
    <div class="modal fade" id="booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-heading">
                    <h3 class="text-center py-3">Booking</h3>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Name*">
                        </div>
                        <div class="input mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Slot</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Class</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Seat</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="btn-booking text-center mt-5 mb-3">
                            <button class="btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- booking Now End -->

</body>

</html>