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
    <?php
        if(isset($_GET['theaterId']))
        {
            $id = $_GET['theaterId'];

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $query = "SELECT * FROM theater WHERE theater_id = '$id'";

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)){
            $name = $row['theater_name'];
            $place = $row['theater_place'];
            $contact = $row['theater_contactNo'];
            $email = $row['theater_email'];
            $address = $row['theater_address'];
            $image = $row['theater_image'];
        }
        mysqli_close($conn);

    // Sub-header Start

        include 'reuseable code\header.html';
    ?>

    <!-- Sub-header End -->

    <!-- Banner Start -->

    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $image;?>" class="d-block" alt="Moive-Img">
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->

    <!-- Navbar Start -->

    <?php session_start(); include 'reuseable code\navbar.php'; ?>

    <!-- Navbar End -->

    <!-- Index Center Content Start -->

    <div class="container mb-5">
        <div class="heading my-5">
            <h1 class="display-1 text-center">
                <?php echo $name;?>
            </h1>
        </div>
        <div class="info-and-location">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <h1>Information</h1>
                        <p>
                            Destination: <?php echo $place;?> <br>
                            Contact Number: <?php echo $contact;?> <br>
                            Email Address: <?php echo $email;?> <br>
                            Destination Address: <?php echo $address;?> <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14489.875971597701!2d67.0897263!3d24.7793893!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d7ad92553370cc6!2sNueplex%20Cinemas%20DHA!5e0!3m2!1sen!2s!4v1631048904275!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php
        include 'reuseable code\footer.html';
        include 'reuseable code\script.html';

        }
    ?>

    <!-- Footer End -->

</body>

</html>