<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap 5 Start -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- bootstrap 5 End -->

    <link rel="stylesheet" href="stylesheet\dashboard.css">
    <script src="script/dashboard.js"></script>

</head>

<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        
        $query1 = "SELECT * FROM genre";
        $query2 = "SELECT * FROM country";
        $query3 = "SELECT * FROM language";
        $query4 = "SELECT * FROM theater";

        $genre = mysqli_query($conn, $query1);
        $country = mysqli_query($conn, $query2);
        $language = mysqli_query($conn, $query3);
        $theater = mysqli_query($conn, $query4);

        mysqli_close($conn);
    ?>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Theater.com</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="d-movie.php">
                    <i class='bx bx-movie'></i>
                    <span class="links_name">Movie</span>
                </a>
                <span class="tooltip">Movie</span>
            </li>
            <li>
                <a href="d-theater.php">
                    <i class='bx bx-film'></i>
                    <span class="links_name">Theaters</span>
                </a>
                <span class="tooltip">Theater</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book'></i>
                    <span class="links_name">Bookings</span>
                </a>
                <span class="tooltip">Bookings</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user-circle'></i>
                    <span class="links_name">Admins</span>
                </a>
                <span class="tooltip">Admins</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Hall</span>
                </a>
                <span class="tooltip">Hall</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text w-100">
            <div class="row">
                <div class="col-4 align-self-center">
                    <div class="text">
                        <h5 class="text-light">Date</h5>
                        <h5 class="text-light">Time</h5>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="text">
                        <h1 class="text-center text-light">THEATER.COM</h1>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="text-end">
                        <div class="dropdown">
                            <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/user.png" alt="profile">
                                John Doe
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <h1 class="display-3 text-center">Movie Form</h1>
        </div>
        <div class="form">
            <form action="movie-create.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Movie Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <select class="form-select" name="movie_genre">
                                <option selected>Select Genre</option>
                                <?php
                                    while($row = mysqli_fetch_array($genre)){
                                        echo '<option value="' . $row['genre_id'] . '">' . $row['genre_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" name="movie_country">
                                <option selected>Select Country</option>
                                <?php
                                    while($row = mysqli_fetch_array($country)){
                                        echo '<option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Language</label>
                            <select class="form-select" name="movie_language">
                                <option selected>Select Language</option>
                                <?php
                                    while($row = mysqli_fetch_array($language)){
                                        echo '<option value="' . $row['language_id'] . '">' . $row['language_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Writer</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Director</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Trailer</label>
                            <input type="url" class="form-control" placeholder="Enter URL">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Theater Name</label>
                            <select class="form-select" name="movie_theaterName">
                                <option selected>Select Theater</option>
                                <?php
                                    while($row = mysqli_fetch_array($theater)){
                                        echo '<option value="' . $row['theater_id'] . '">' . $row['theater_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Release Date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Movie Poster</label>
                    <input type="file" class="form-control form-control-sm">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="10"></textarea>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-dark" type="submit">Submit</button>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-outline-danger col-sm-6" type="reset">Reset</button>
                </div>

            </form>
        </div>
    </section>
</body>

</html>