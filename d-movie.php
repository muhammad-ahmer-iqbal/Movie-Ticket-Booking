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

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name ">Theater.com</div>
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
                    <span class="links_name">Movies</span>
                </a>
                <span class="tooltip">Movies</span>
            </li>
            <li>
                <a href="d-theater.php">
                    <i class='bx bx-film'></i>
                    <span class="links_name">Theaters</span>
                </a>
                <span class="tooltip">Theaters</span>
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
        <div class="container">
            <div class="card mb-3">
                <div class="row ml-5">
                    <div class="col-lg-4">
                        <div class="dashboard-cards">
                            <div class="cards">
                                <div class="cards-heading">
                                    <h3 class="text-center">Tom And Jerry</h3>
                                </div>
                                <div class="cards-img">
                                    <img src="assets/card-1.jpg" width="100%" alt="poster">
                                </div>
                                <div class="card-btn my-3 text-center">
                                    <a href="movie-form.php" class="btn btn-outline-success">Edit</a>
                                    <a href="#" class="btn btn-outline-secondary">Details</a>
                                    <a href="#" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="dashboard-cards">
                            <div class="cards">
                                <div class="cards-heading">
                                    <h3 class="text-center">Tom And Jerry</h3>
                                </div>
                                <div class="cards-img">
                                    <img src="assets/card-1.jpg" width="100%" alt="poster">
                                </div>
                                <div class="card-btn my-3 text-center">
                                    <a href="movie-form.php" class="btn btn-outline-success">Edit</a>
                                    <a href="#" class="btn btn-outline-secondary">Details</a>
                                    <a href="#" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="dashboard-cards">
                            <div class="cards">
                                <div class="cards-heading">
                                    <h3 class="text-center">Tom And Jerry</h3>
                                </div>
                                <div class="cards-img">
                                    <img src="assets/card-1.jpg" width="100%" alt="poster">
                                </div>
                                <div class="card-btn my-3 text-center">
                                    <a href="movie-form.php" class="btn btn-outline-success">Edit</a>
                                    <a href="#" class="btn btn-outline-secondary">Details</a>
                                    <a href="#" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>