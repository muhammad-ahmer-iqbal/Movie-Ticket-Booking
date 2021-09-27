<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>

</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        
        $query1 = "SELECT * FROM movie";
        $query2 = "SELECT * FROM contact_us";
        $query3 = "SELECT * FROM theater";

        $movie = mysqli_query($conn, $query1);
        $message = mysqli_query($conn, $query2);
        $theater = mysqli_query($conn, $query3);

        $movieCount = mysqli_num_rows($movie);
        $theaterCount = mysqli_num_rows($theater);
        $messageCount = mysqli_num_rows($message);
        
        mysqli_close($conn);
        
        include 'reuseable code\dashboard vertical nav.html';
        include 'reuseable code\dashboard header.php';
    ?>
    
    <br>
    <section class="home-section-1">
        <div class="container">
            <?php 
                if(@$_GET['addMessage'] == true)
                {
                    echo "<div class='alert alert-success my-3' role='alert'>".$_GET['addMessage']."</div>";
                }
                if(@$_GET['delMessage'] == true)
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['delMessage']."</div>";
                }
                if(@$_GET['editMessage'] == true)
                {
                    echo "<div class='alert alert-info my-3' role='alert'>".$_GET['editMessage']."</div>";
                }
            ?>
            <div class="card mb-3">
                <div class="row ml-5">
                    <div class="col-lg-4">
                        <div class="dashboard-card">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img src="assets/clapperboard.svg" width="100%" alt="Card">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-heading">
                                        <h1>Moives</h1>
                                        <?php
                                            echo '<h4>' . $movieCount .'</h4>';
                                        ?>
                                    </div>
                                    <hr>
                                    <div class="card-btn">
                                        <a href="movie-form.php" class="btn btn-outline-success">Create</a>
                                        <a href="movie-index.php" class="btn btn-outline-secondary">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dashboard-card">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img src="assets/theater.svg" width="100%" alt="Card">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-heading">
                                        <h1>Theaters</h1>
                                        <?php
                                            echo '<h4>' . $theaterCount .'</h4>';
                                        ?>
                                    </div>
                                    <hr>
                                    <div class="card-btn">
                                        <a href="theater-form.php" class="btn btn-outline-success">Create</a>
                                        <a href="theater-index.php" class="btn btn-outline-secondary">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="dashboard-card">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img src="assets/chatting.svg" width="100%" alt="Card">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-heading">
                                        <h1>Messages</h1>
                                        <?php
                                            echo '<h4>' . $messageCount .'</h4>';
                                        ?>
                                    </div>
                                    <hr>
                                    <div class="card-btn d-grid gap-2">
                                        <a href="message-index.php" class="btn btn-outline-secondary">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            activeDash("dashboard.php");
        });
    </script>

    <?php
        }
        else{
            header('location:admin-login.php');
        }
    ?>
</body>
<?php include 'reuseable code\dashboard script.html';?>
</html>