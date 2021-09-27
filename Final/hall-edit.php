<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['hall_id'];
        $seats = $_POST['hall_availableSeats'];
        $theater = $_POST['hall_theaterName'];
        $hall = $_POST['hall_no'];

        $query = "UPDATE hall SET hall_availableSeats = '$seats', hall_theaterName = '$theater', hall_no = '$hall' WHERE hall_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:hall-index.php?editMessage=Edited Successfully");
    }
?>