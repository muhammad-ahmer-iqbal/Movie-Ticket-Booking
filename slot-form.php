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
        
        $query = "SELECT * FROM theater";

        $theater = mysqli_query($conn, $query);

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
            <h1 class="display-3 text-center">Add Slot</h1>
        </div>
        <div class="form">
            <form action="#">

                <div class="mb-3">
                    <label class="form-label">Theater</label>
                    <select class="form-select" name="slot_theaterName">
                        <option selected>Select Theater</option>
                        <?php
                            while($row = mysqli_fetch_array($theater)){
                                echo '<option value="' . $row['theater_id'] . '">' . $row['theater_name'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Timing</label>
                            <input type="text" class="form-control" name="slot_timings" placeholder="from - to (5 - 7)">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Shift</label>
                            <select class="form-select" name="slot_shift">
                                <option selected>Select Shift</option>
                                <option value="Morning">Morning</option>
                                <option value="Evening">Evening</option>
                                <option value="Night">Night</option>
                            </select>
                        </div>

                    </div>
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
<?php
    if(@$editId != null){
        echo '  <script>
                    $(document).ready(function(){
                        $("[name=theater_name]").val("'.$name.'");
                        $("[name=theater_place]").val("'.$place.'");
                        $("[name=theater_owner]").val("'.$owner.'");
                    })
                </script>';
    }
?>
<?php include 'reuseable code\dashboard.html'?>
</html>