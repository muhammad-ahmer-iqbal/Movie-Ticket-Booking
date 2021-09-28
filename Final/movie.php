<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if(@$_GET['onShow']){
                echo 'On Show';
            }
            elseif (@$_GET['comingSoon']) {
                echo 'Coming Soon';
            }
            else{
                echo 'All Movies';
            }
        ?> | Theater.com</title>
    <?php include 'reuseable code\CDNs.html'?>
</head>

<body>

    <!-- Sub-header Start -->

    <?php include 'reuseable code\header.html'; ?>

    <!-- Sub-header End -->
    <hr class="hr">
    <!-- Navbar Start -->

    <?php include 'reuseable code\navbar.php'; ?>

    <!-- Navbar End -->
        
    <!-- Movies Center Content Start -->
    <div class="container">

        <div class="movie my-5">
            <div class="heading">
                <h2>
                <?php
                    if(@$_GET['onShow']){
                        echo 'On Show';
                    }
                    elseif (@$_GET['comingSoon']) {
                        echo 'Coming Soon';
                    }
                    else{
                        echo 'All Movies';
                    }
                ?>
                </h2>
            </div>
        </div>

        <?php
            if((@$_GET['onShow'] == false) && (@$_GET['comingSoon'] == false)){
                echo    '<div class="search-field my-5">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Movie" id="searchMovie">
                            </div>
                        </div>';
            }
       ?>

        <div class="row my-5 check">

            <?php
                $conn = $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

                if(@$_GET['onShow']){
                    $query = "SELECT movie.movie_id, movie.movie_poster, movie.movie_releaseDate FROM movie_inslot JOIN movie ON movie_inslot.m_inslot_id = movie.movie_id";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        echo    '<div class="col-md-3 mb-5">
                                    <div class="content">
                                        <a href="movie-detail.php?movieId='.$row['movie_id'].'">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="'.$row['movie_poster'].'">
                                            <div class="content-details fadeIn-bottom">
                                                <h6>Release Date</h6>
                                                <h5>'.$row['movie_releaseDate'].'</h5>
                                                <br>
                                                <h4 class="text-info">Click here</h4>
                                                <h5 class="text-info">for more details</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>';
                    }
                }
                elseif (@$_GET['comingSoon']) {
                    $query = "SELECT movie_id, movie_poster FROM movie WHERE movie_releaseDate = 0";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        echo    '<div class="col-md-3 mb-5">
                                    <div class="content">
                                        <a href="movie-detail.php?movieId='.$row['movie_id'].'">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="'.$row['movie_poster'].'">
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
                }
                else{
                    $query = "SELECT movie_id, movie_poster, movie_releaseDate FROM movie";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        echo    '<div class="col-md-3 mb-5">
                                    <div class="content">
                                        <a href="movie-detail.php?movieId='.$row['movie_id'].'">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="'.$row['movie_poster'].'">
                                            <div class="content-details fadeIn-bottom">
                                                <h6>Release Date</h6>
                                                <h5>'.$row['movie_releaseDate'].'</h5>
                                                <br>
                                                <h4 class="text-info">Click here</h4>
                                                <h5 class="text-info">for more details</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>';
                    }

                    mysqli_close($conn);
                }
            ?>

        </div>

        
       <?php
            if((@$_GET['onShow']) || (@$_GET['comingSoon'])){
                echo    '<div class="read-more text-center">
                            <a href="movie.php">
                                Browse All Movies
                            </a>
                        </div>';
            }
       ?>

                    

    </div>

    <!-- Movies Center Content End -->

    <!-- Footer Start -->

    <?php
        include 'reuseable code\footer.html';
        include 'reuseable code\script.html';
    ?>

    <!-- Footer End -->

</body>
<script>
    $(document).ready(function() {
        <?php
            if(@$_GET['onShow']){
                echo 'active("movie.php?onShow=1");';
            }
            elseif (@$_GET['comingSoon']) {
                echo 'active("movie.php?comingSoon=1");';
            }
            else{
                echo 'filter("searchMovie");';
            }
        ?>
    });
</script>

</html>