<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['hall_id'];
        $seats = $_POST['hall_availableSeats'];
        $theater = $_POST['hall_theaterName'];
        $hall = $_POST['hall_no'];

        $query = "INSERT INTO hall (hall_availableSeats, hall_theaterName, hall_no) VALUES ('$seats', '$theater', '$hall')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:hall-index.php?addMessage=Added Successfully");
    }
?>