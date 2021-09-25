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
        
        $query1 = "SELECT * FROM slot";
        $query2 = "SELECT * FROM hall";
        $query3 = "SELECT * FROM movie";

        $slot = mysqli_query($conn, $query1);
        $hall = mysqli_query($conn, $query2);
        $movie = mysqli_query($conn, $query3);
        
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
            <h1 class="display-3 text-center">Add Show</h1>
        </div>
        <div class="form">
            <form action="addShow-create.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Movie</label>
                    <select class="form-select" name="m_inslot_movieName">
                        <option selected>Select Movie</option>
                        <?php
                            while($row = mysqli_fetch_array($movie)){
                                echo '<option value="' . $row['movie_id'] . '">' . $row['movie_name'] . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slot</label>
                            <select class="form-select" name="m_inslot_slotId">
                                <option selected>Select Slot</option>
                                <?php
                                    while($row = mysqli_fetch_array($slot)){
                                        echo '<option value="' . $row['slot_id'] . '">' . $row['slot_timings'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Hall</label>
                            <select class="form-select" name="m_inslot_hallNo">
                                <option selected>Select Hall</option>
                                <?php
                                    while($row = mysqli_fetch_array($hall)){
                                        echo '<option value="' . $row['hall_id'] . '">' . $row['hall_no'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Day</label>
                    <select class="form-select" name="m_inslot_day">
                        <option selected>Select Day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
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
</body>

</html>