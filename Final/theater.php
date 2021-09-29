<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater | Theater.com</title>
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
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/atrium-slide-1.jpg" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/centaurus-slide-2.jpg" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/atrium-slide-3.jpg" class="d-block" alt="Moive-Img">
                </div>
                <div class="carousel-item">
                    <img src="./assets/centaurus-slide-4.jpg" class="d-block" alt="Moive-Img">
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
                <h2>Theaters</h2>
            </div>
        </div>

        <div class="search-field my-5">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Theater" id="searchTheater">
            </div>
        </div>

        <div class="row mb-5 check">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

            $query = "SELECT theater_id, theater_name, theater_image FROM theater";

            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
                echo    '<div class="col-md-3 mb-5">
                                <div class="content">
                                    <a href="theater-detail.php?theaterId=' . $row['theater_id'] . '">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="' . $row['theater_image'] . '" alt="theater img">
                                        <div class="content-details fadeIn-bottom">
                                            <h1>' . $row['theater_name'] . '</h1>
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

        <!-- Index Center Content End -->

        <!-- Footer Start -->

        <?php
        include 'reuseable code\footer.html';
        include 'reuseable code\script.html';
        ?>

        <!-- Footer End -->

</body>
<script>
    $(document).ready(function() {
        active("theater.php");
        filter("searchTheater");
    });
</script>

</html>