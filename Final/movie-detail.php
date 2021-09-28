<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie | movie.com</title>
    <?php include 'reuseable code\CDNs.html' ?>
</head>

<body>
    <?php
        if(isset($_GET['movieId']))
        {
            $id = $_GET['movieId'];
        }
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $query = "SELECT * FROM movie WHERE movie_id = '$id'";
        $query1 = "SELECT theater.theater_id, theater.theater_name, theater.theater_image FROM theater JOIN movie ON theater.theater_id = movie.movie_theaterName WHERE movie.movie_id = '$id'";
        $result1 = mysqli_query($conn, $query1);

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)){
            $query2 = "SELECT genre_name FROM genre WHERE genre_id = $row[movie_genre]";
            $query3 = "SELECT country_name FROM country WHERE country_id = $row[movie_country]";
            $query4 = "SELECT language_name FROM language WHERE language_id = $row[movie_language]";
            $result2 = mysqli_query($conn, $query2);
            $result3 = mysqli_query($conn, $query3);
            $result4 = mysqli_query($conn, $query4);
            while($row2 = mysqli_fetch_array($result2)){
                $row['movie_genre'] = $row2['genre_name'];
            }
            while($row3 = mysqli_fetch_array($result3)){
                $row['movie_country'] = $row3['country_name'];
            }
            while($row4 = mysqli_fetch_array($result4)){
                $row['movie_language'] = $row4['language_name'];
            }
            $name = $row['movie_name'];
            $genre = $row['movie_genre'];
            $country = $row['movie_country'];
            $language = $row['movie_language'];
            $writer = $row['movie_writer'];
            $director = $row['movie_director'];
            $description = $row['movie_description'];
            $trailer = $row['movie_trailer'];
            $release = $row['movie_releaseDate'];
            $theaterId = $row['movie_theaterName'];
            $poster = $row['movie_poster'];
        }
        mysqli_close($conn);

    // Sub-header Start

        include 'reuseable code\header.html';
    ?>

    <!-- Sub-header End -->
    <hr class="hr">
    <!-- Navbar Start -->

    <?php include 'reuseable code\navbar.php'; ?>

    <!-- Navbar End -->

    <!-- Movies Center Content Start -->

    <div class="movie-center-content">
        <div class="container">
            <div class="movie my-4">
                <div class="heading">
                    <h2><?php echo $name;?></h2>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="movie-img">
                        <img src="<?php echo $poster;?>" class="img-fluid" width="100%" alt="Movie">
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
                                    <h6>Language</h6>
                                    <h6>Tag Line</h6>
                                    <h6>Rating</h6>

                                </div>
                                <div class="col-6">

                                    <h6>: <?php echo $director;?></h6>
                                    <h6>: <?php echo $writer;?></h6>
                                    <h6>: <?php echo $release;?></h6>
                                    <h6>: <?php echo $genre;?></h6>
                                    <h6>: <?php echo $language;?></h6>
                                    <h6>: <?php echo $tag;?></h6>
                                    <h6>: <?php echo $rating;?></h6>
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
                                <p><?php echo $description;?></p>
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
                        <div class="movie">
                            <h4 class="mb-3">Available In movies</h4>
                            <div class="row">

                                <?php
                                    while($row1 = mysqli_fetch_array($result1)){
                                        echo    '<div class="col-lg-6">
                                                    <div class="content">
                                                        <a data-bs-toggle="modal" data-bs-target="#booking">
                                                            <div class="content-overlay"></div>
                                                            <img class="content-image" src="' . $row1['theater_image'] . '">
                                                            <div class="content-details fadeIn-bottom">
                                                                <h1>' . $row1['theater_name'] . '</h1>
                                                                <br>
                                                                <button class="btn book-btn btn-danger">Book Now</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>';
                                    }
                                ?>
                                
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
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card 1</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <form class="review-mess">
                <label for="textarea" class="form-label text-start">Rating Stars <br>
                    <span class="text-end">
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="1" /><label for="star5" title="Rocks!">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="2" /><label for="star4" title="Pretty good">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="4" /><label for="star2" title="Kinda bad">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="5" /><label for="star1" title="Sucks big time">1 star</label>
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

    <?php
        include 'reuseable code\footer.html';
    ?>

    <!-- Footer End -->

    <!-- Trailer Modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-danger" id="exampleModalLabel"><?php echo $name;?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="315" src="<?php echo $trailer;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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