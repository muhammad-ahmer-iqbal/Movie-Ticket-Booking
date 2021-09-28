<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Theater.com</title>
    <?php include 'reuseable code\CDNs.html' ?>
</head>

<body>

    <!-- Sub-header Start -->

    <?php include 'reuseable code\header.html'; ?>

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

    <?php include 'reuseable code\navbar.php'; ?>

    <!-- Navbar End -->

    <!-- Index Center Content Start -->

    <div class="container mb-5">

        <div class="movie my-5">
            <div class="heading">
                <h2>On Show</h2>
            </div>
        </div>

        <div class="row mb-5">

            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

            $query1 = "SELECT movie.movie_id, movie.movie_poster, movie.movie_releaseDate FROM movie_inslot JOIN movie ON movie_inslot.m_inslot_id = movie.movie_id LIMIT 4";

            $result1 = mysqli_query($conn, $query1);

            while ($row1 = mysqli_fetch_array($result1)) {
                echo    '<div class="col-md-3 mb-5">
                                <div class="content">
                                    <a href="movie-detail.php?movieId=' . $row1['movie_id'] . '">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="' . $row1['movie_poster'] . '" alt="movie img">
                                        <div class="content-details fadeIn-bottom">
                                            <h6>Release Date</h6>
                                            <h5>' . $row1['movie_releaseDate'] . '</h5>
                                            <br>
                                            <h4 class="text-info">Click here</h4>
                                            <h5 class="text-info">for more details</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>';
            }
            ?>

        </div>

        <div class="read-more text-center">
            <a href="movie.php?onShow">
                See More
            </a>
        </div>

        <div class="movie my-5">
            <div class="heading">
                <h2>Coming Soon</h2>
            </div>
        </div>

        <div class="row mb-5">

            <?php

            $query2 = "SELECT movie_id, movie_poster FROM movie WHERE movie_releaseDate = 0 LIMIT 4";

            $result2 = mysqli_query($conn, $query2);

            while ($row2 = mysqli_fetch_array($result2)) {
                echo    '<div class="col-md-3 mb-5">
                                <div class="content">
                                    <a href="movie-detail.php?movieId=' . $row2['movie_id'] . '">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="' . $row2['movie_poster'] . '" alt="movie img">
                                        <div class="content-details fadeIn-bottom">
                                            <h6>Release Date</h6>
                                            <h5>Coming Soon</h5>
                                            <br>
                                            <h4 class="text-info">Click here</h4>
                                            <h5 class="text-info">for more details</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>';
            }
            ?>

        </div>

        <div class="read-more text-center">
            <a href="movie.php?comingSoon">
                See More
            </a>
        </div>

        <div class="movie my-5">
            <div class="heading">
                <h2>Theaters</h2>
            </div>
        </div>

        <div class="row mb-5">

            <?php

            $query3 = "SELECT theater_id, theater_name, theater_image FROM theater LIMIT 4";

            $result3 = mysqli_query($conn, $query3);

            while ($row3 = mysqli_fetch_array($result3)) {
                echo    '<div class="col-md-3 mb-5">
                                <div class="content">
                                    <a href="theater-detail.php?theaterId=' . $row3['theater_id'] . '">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="' . $row3['theater_image'] . '" alt="theater img">
                                        <div class="content-details fadeIn-bottom">
                                            <h1>' . $row3['theater_name'] . '</h1>
                                            <br>
                                            <h4 class="text-info">Click here</h4>
                                            <h5 class="text-info">for more details</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>';
            }

            mysqli_close($conn);
            ?>

        </div>

        <div class="read-more text-center">
            <a href="theater.php">
                See More
            </a>
        </div>

    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php
        include 'reuseable code\footer.html';
        include 'reuseable code\script.html';
    ?>

    <!-- Footer End -->

</body>
<script>
    $(document).ready(function(){
        active("index.php");
    });
</script>

</html>