<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account | Theater.com</title>
    <?php include '..\Assets\CDNs.html'?>
</head>

<body class="body">

    <!-- Login Start -->
    <?php
        session_start();
        if(isset($_SESSION['User']))
        {
            header('location:index.php');
        }
        else{
    ?>
    <div class="login">
        <div class="container">
            <div class="login-body">
                <div class="heading text-center">
                    <a href="index.php">
                        <img class="my-5" src="../Media/Logo0.png" width="20%" alt="Logo">
                    </a>
                </div>
                <?php 
                    if(@$_GET['Error'] == true)
                    {
                        echo "<div class='alert alert-danger mt-3' role='alert'>".$_GET['Error']."</div>";
                    }
                ?>
                <div class="inputs">
                    <form action="login(check).php" method="POST">
                        <div class="input mb-4">
                            <input type="text" class="form-control" placeholder="UserID" name="userID">
                        </div>
                        <div class="input mb-5">
                            <input type="password" class="form-control" placeholder="Password" name="userPassword">
                        </div>

                        <div class="login-btn text-center">
                            <button type="submit" class="btn" name="user" value="user-login">Login</button>
                        </div>
                        <div class="an-account pb-4 text-center">
                            <a href="signup.php">Create an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Login Start -->
    <?php
        }
    ?>
</body>

</html>