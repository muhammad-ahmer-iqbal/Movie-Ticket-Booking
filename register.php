<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now - Ticket.com</title>

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

    <?php include 'navbar.php'; ?>

    <!-- Navbar End -->

    <!-- Register Center Content Start -->
    <div class="container register">

        <div class="movie my-5">
            <div class="heading">
                <h2>Register Now</h2>
            </div>
        </div>

        <div class="form">
            <form action="#">

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Your Username*">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Your Contact No*">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Your Age*">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Enter Your Password*">
                </div>

                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-outline-dark" type="button">Register</button>
                </div>
                <div class="d-grid gap-2 mt-4 mb-5">
                    <button class="btn btn-login btn-outline-success" type="button">
                        <a href="login.php">Already have an account?Login</a>
                    </button>
                </div>

            </form>
        </div>

    </div>




    <!-- Register Center Content End -->

    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->

</body>

</html>