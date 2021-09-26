<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>
</head>

<body class="adminBody">

    <!-- Login Start -->

    <div class="login">
        <div class="container">
            <div class="login-body">
                <div class="heading text-center">
                    <a href="index.php">
                        <img class="mt-5" src="assets/Logo0.png" width="20%" alt="Logo">
                    </a>
                <h1 class="text-center mb-5">Admin Panel</h1>
                </div>
                <?php 
                    if(@$_GET['Error'] == true)
                    {
                        echo "<div class='alert alert-danger mt-3' role='alert'>".$_GET['Error']."</div>";
                    }
                ?>
                <div class="inputs">
                    <form action="admin-login(check).php" method="POST">
                        <div class="input mb-4">
                            <input type="text" class="form-control" placeholder="Username*" name="adminID">
                        </div>
                        <div class="input mb-5">
                            <input type="password" class="form-control" placeholder="Password*" name="adminPassword">
                        </div>

                        <div class="login-btn text-center">
                            <button type="submit" class="btn" name="admin" value="admin-login">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Login Start -->

</body>

</html>