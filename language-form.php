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
            <h1 class="display-3 text-center">Add Language</h1>
        </div>
        <div class="form">
            <form action="language-create.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" name="language_name">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-dark" type="button">Submit</button>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-outline-danger" type="reset">Reset</button>
                </div>

            </form>
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