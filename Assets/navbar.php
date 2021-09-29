    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg sticky-top bg mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="..\Media\Logo.png" class="img-fluid" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="movie.php?onShow">On Show</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="movie.php?comingSoon">Coming Soon</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="theater.php">Theater</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <?php
                        if (isset($_SESSION['User']))
                        {
                            echo    '<li class="nav-item">
                                        <a class="nav-link border-right">'.$_SESSION['UserName'].'</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="logout.php?logoutUser">Logout</a>
                                    </li>';
                        }
                        else{
                            echo    '<li class="nav-item">
                                        <a class="nav-link border-right" href="signup.php">Register Now </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->