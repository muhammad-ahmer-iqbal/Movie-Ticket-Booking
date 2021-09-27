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

<body class="body">


    <!-- Register Center Content Start -->

    <div class="register">
        <div class="container">
            <div class="register-body">
                <div class="heading text-center">
                    <a href="index.php">
                        <img src="assets/Logo0.png" class="my-4" width="20%" alt="Logo">
                    </a>
                </div>
                <div class="inputs">
                    <form action="user-create.php" method="POST">
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter User ID*" name="user_id">
                        </div>
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter Name*" name="user_name">
                        </div>
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter Number*" name="user_contactNo">
                        </div>
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter Age*" name="user_age">
                        </div>
                        <div class="input mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password*" name="user_password">
                        </div>
                        <div class="input mb-5">
                            <input type="password" class="form-control" placeholder="Enter Confirm-Password*" name="user_confirmPassword">
                        </div>

                        <div class="register-btn mb-2 text-center">
                            <button type="submit" class="btn mb-2" name="submit" value="submit">Register</button>
                        </div>
                        <div class="an-account pb-5 text-center">
                            <a href="login.php">Already have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Center Content End -->

</body>

</html>