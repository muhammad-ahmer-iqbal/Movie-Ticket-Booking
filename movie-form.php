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
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="movie-form.php">
                    <i class='bx bx-movie'></i>
                    <span class="links_name">Movie</span>
                </a>
                <span class="tooltip">Movie</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">
            <img src="assets\Logo.png" width="20%">
        </div>
    </section>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <h1 class="display-3 text-center">Movie Form</h1>
        </div>
        <div class="form">
            <form action="#">

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Movie Name*">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Select Genre*</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Select Country*</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Select Language*</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Writer Name*">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Director Name*">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Trailer*">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Theater Name*">
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Release Date*</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Movie Poster*</label>
                    <input class="form-control form-control-sm" type="file">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description*</label>
                    <textarea class="form-control" rows="10"></textarea>
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