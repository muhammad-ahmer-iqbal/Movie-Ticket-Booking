<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form - Ticket.com</title>

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

    <!-- Navbar Start -->

    <?php include 'navbar.php'; ?>

    <!-- Navbar End -->

    <!-- Index Center Content Start -->

    <div class="contact-us">
        <div class="container">
            <div class="heading">
                <h1 class="display-3 text-center">
                    Booking
                </h1>
            </div>
            <div class="form">
                <form action="booking-create.php" method="POST">
                    <div class="row input-group mb-3">
                        <div class="col-md-6">
                            <label for="first-name" class="form-label">First name</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label for="last-name" class="form-label">Last name</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->

</body>

</html>