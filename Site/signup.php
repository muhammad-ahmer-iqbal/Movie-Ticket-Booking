<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account | Theater.com</title>
    <?php include '..\Assets\CDNs.html'?>
</head>

<body class="body">


    <!-- Register Center Content Start -->
    <?php
        session_start();
        if(isset($_SESSION['User']))
        {
            header('location:index.php');
        }
        else{
    ?>
    <div class="register">
        <div class="container">
            <div class="register-body">
                <div class="heading text-center">
                    <a href="index.php">
                        <img src="../Media/Logo0.png" class="my-4" width="20%" alt="Logo">
                    </a>
                </div>
                <div class="inputs">
                    <form action="user-create.php" method="POST">
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter User ID*" name="user_id" required>
                            <span id="user_id" class="text-muted font-weight-bold">Try to use different User ID using characters and numbers</span>
                            <br>
                            <?php
                                if(isset($_SESSION['userExist'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['userExist'] . '</span>';
                                    session_destroy();
                                }
                            ?>
                        </div>
                        <div class="input mb-3">
                            <input type="text" class="form-control" placeholder="Enter Name*" name="user_name" required>
                            <?php
                                if(isset($_SESSION['nameError'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['nameError'] . '</span>';
                                    session_destroy();
                                }
                            ?>
                            <span id="user_name"></span>
                        </div>
                        <div class="input mb-3">
                            <input type="number" class="form-control" placeholder="Enter Your Contact Number* (03XXXXXXXXX)" name="user_contactNo" required>
                            <?php
                                if(isset($_SESSION['contactError'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['contactError'] . '</span>';
                                    session_destroy();
                                }
                                if(isset($_SESSION['digitError'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['digitError'] . '</span>';
                                    session_destroy();
                                }
                            ?>
                            <span id="user_contactNo"></span>
                        </div>
                        <div class="input mb-3">
                            <input type="number" class="form-control" placeholder="Enter Age*" name="user_age" required>
                            <?php
                                if(isset($_SESSION['ageError'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['ageError'] . '</span>';
                                    session_destroy();
                                }
                            ?>
                            <span id="user_age"></span>
                        </div>
                        <div class="input mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password*" name="user_password" required>
                            <span id="user_password"></span>
                        </div>
                        <div class="input mb-5">
                            <input type="password" class="form-control" placeholder="Enter Confirm-Password" name="user_confirmPassword" required>
                            <?php
                                if(isset($_SESSION['passwordError'])){
                                    echo '<span class="text-danger font-weight-bold">' . $_SESSION['passwordError'] . '</span>';
                                    session_destroy();
                                }
                            ?>
                            <span id="user_confirmPassword"></span>
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
    <?php
        }
        // include '..\Assets\script.html';
    ?>
    <!-- Register Center Content End -->

</body>

</html>