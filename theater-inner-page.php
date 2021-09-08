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

    <!-- Index Center Content Start -->

    <div class="container mb-5">
        <div class="heading my-5">
            <h1 class="display-1 text-center">
                Neuplex Theater
            </h1>
        </div>
        <div class="info-and-location">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <h1>Information</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore animi voluptatem placeat quisquam obcaecati illo quo doloremque corrupti cupiditate ut? Blanditiis quasi numquam hic commodi velit, repellat fugiat ratione exercitationem dolorum voluptates debitis, aperiam maiores a accusamus delectus expedita nihil adipisci autem itaque culpa magnam. Ad eos ducimus culpa iusto quidem architecto optio quam aut hic temporibus neque, magnam atque nostrum cupiditate perferendis vitae soluta sint unde tempora provident facilis nisi. Accusantium mollitia sunt ullam quae! Nobis consectetur at, nemo ad facilis quibusdam delectus natus accusantium voluptatum impedit ut expedita amet! Repellendus quos et, repellat, ad dolor reiciendis fugiat perferendis facere corrupti quasi libero voluptas perspiciatis accusantium distinctio atque a quas. Odit, praesentium voluptatem? Doloribus libero tenetur porro alias accusamus enim laboriosam quaerat aut beatae dolores, suscipit sequi officiis voluptate non molestiae ad molestias temporibus possimus perspiciatis. Ea deserunt reiciendis assumenda cumque, quis illum sed ipsa impedit odit animi, doloremque error repellendus provident incidunt modi consequuntur fugiat itaque maiores commodi eaque officiis.
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

    <?php include 'footer.php'; ?>

    <!-- Footer End -->

</body>

</html>