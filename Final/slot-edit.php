<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['slot_id'];
        $timing = $_POST['slot_timnigs'];
        $shift = $_POST['slot_shift'];
        $theater = $_POST['slot_theaterName'];

        $query = "UPDATE slot SET slot_timings = '$timing', slot_shift = '$shift', slot_theaterName = '$theater' WHERE slot_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:slot-index.php?editMessage=Edited Successfully");
    }
?>