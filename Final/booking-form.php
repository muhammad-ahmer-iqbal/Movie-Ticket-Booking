<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form | movie.com</title>
    <?php include 'reuseable code\CDNs.html' ?>
</head>

<body>

    <!-- Sub-header Start -->

    <?php
        session_start();
        if(isset($_SESSION['User']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $query = "SELECT * FROM class";
        $query1 = "SELECT * FROM movie_inslot";

        $result = mysqli_query($conn, $query);
        $option = mysqli_query($conn, $query1);
        $result1 = mysqli_query($conn, $query1);

        include 'reuseable code\header.html';
        // Sub-header End
        echo '<hr class="hr">';
        // Navbar Start
        include 'reuseable code\navbar.php';
        // Navbar End
    ?>

    <!-- Index Center Content Start -->

    <div class="contact-us">
        <div class="container mb-3">
            <?php
                if(@$_GET['addMessage'] == true)
                {
                    echo "<div class='alert alert-success my-3' role='alert'>".$_GET['addMessage']."</div>";
                }
            ?>

            <div class="heading">
                <h1 class="display-3 text-center">
                    Shows List
                </h1>
            </div>

            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" id="m_inslot_id">
                        <option selected>Select Movie</option>
                        <?php
                            while ($opt = mysqli_fetch_array($option)){
                                $movie = "SELECT movie_name FROM movie WHERE movie_id = $opt[m_inslot_movieName]";
                                $optMovie = mysqli_query($conn, $movie);
                                while ($select = mysqli_fetch_array($optMovie)) {
                                    $opt['m_inslot_movieName'] = $select['movie_name'];
                                }
                                echo '<option value="' . $opt['m_inslot_id'] . '">' . $opt['m_inslot_movieName'] . '</option>';
                            }
                        ?>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Three</option>
                        <option value="5">Three</option>
                    </select>
                </div>
            </div>
            <table class="table border-danger">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">#</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">At Theater</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Hall</th>
                        <th scope="col">Day</th>
                    </tr>
                </thead>
                <tbody class="select">
                    <?php
                    $serial = 1;
                    while ($row = mysqli_fetch_array($result1)) {
                        $query2 = "SELECT movie_name FROM movie WHERE movie_id = $row[m_inslot_movieName]";
                        $query3 = "SELECT slot_timings FROM slot WHERE slot_id = $row[m_inslot_slotId]";
                        $query4 = "SELECT hall_no FROM hall WHERE hall_id = $row[m_inslot_hallNo]";
                        $query5 = "SELECT theater_name FROM theater WHERE theater_id = (SELECT movie.movie_theaterName FROM movie JOIN movie_inslot ON movie.movie_id = $row[m_inslot_movieName])";
                        $result2 = mysqli_query($conn, $query2);
                        $result3 = mysqli_query($conn, $query3);
                        $result4 = mysqli_query($conn, $query4);
                        $result5 = mysqli_query($conn, $query5);
                        while ($row5 = mysqli_fetch_array($result5)) {
                            $theater = $row5['theater_name'];
                        }
                        while ($row2 = mysqli_fetch_array($result2)) {
                            $row['m_inslot_movieName'] = $row2['movie_name'];
                        }
                        while ($row3 = mysqli_fetch_array($result3)) {
                            $row['m_inslot_slotId'] = $row3['slot_timings'];
                        }
                        while ($row4 = mysqli_fetch_array($result4)) {
                            $row['m_inslot_hallNo'] = $row4['hall_no'];
                        }
                        echo    '<tr>
                                        <th scope="row">' . $serial . '</th>
                                        <td>' . $row['m_inslot_movieName'] . '</td>
                                        <td>' . $theater . '</td>
                                        <td>' . $row['m_inslot_slotId'] . '</td>
                                        <td>' . $row['m_inslot_hallNo'] . '</td>
                                        <td>' . $row['m_inslot_day'] . '</td>
                                    </tr>';
                        $serial++;
                    }
                    ?>
                </tbody>
            </table>

            <div class="heading">
                <h1 class="display-3 text-center">
                    Booking
                </h1>
            </div>
            <div class="form">
                <form action="booking-create.php" method="POST">
                    <input type="hidden" class="form-control" placeholder="Selected Movie" name="booking_movieInSlotId">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['UserName']; ?>" name="booking_userName" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Class</label>
                                <select class="form-select" name="booking_className">
                                    <option selected>Select Class</option>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<option value="' . $row['class_id'] . '">' . $row['class_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Seats</label>
                                <select class="form-select" name="booking_seats">
                                    <option selected>Select Seat</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Three</option>
                                    <option value="5">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-dark" type="submit" name="submit" value="submit">Submit</button>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-outline-danger" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php
        mysqli_close($conn);}
        else{
            header('location:login.php');
        mysqli_close($conn);
        }
        include 'reuseable code\footer.html';
    ?>

    <!-- Footer End -->

</body>
<script>
    $(document).ready(function() {
        $("#m_inslot_id").change(function() {
            var x = $("#m_inslot_id").val();
            $("[name=booking_movieInSlotId]").val(x);
        });
    });
</script>

</html>