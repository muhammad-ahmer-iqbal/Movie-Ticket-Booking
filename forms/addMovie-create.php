<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['inslot_id'];
        $day = $_POST['inslot_day'];
        $slot = $_POST['inslot_slotId'];
        $movie = $_POST['inslot_movieName'];
        $hall = $_POST['inslot_hallNo'];

        $query = "INSERT INTO 'movie_inslot' VALUES('', '$day', '$slot', '$movie', '$hall')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:addMovie-index.php?message=Added Successfully");
    }
?>