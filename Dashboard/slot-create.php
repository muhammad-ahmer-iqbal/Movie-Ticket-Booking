<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['slot_id'];
        $timing = $_POST['slot_timings'];
        $shift = $_POST['slot_shift'];
        $theater = $_POST['slot_theaterName'];

        $query = "INSERT INTO slot (slot_timings, slot_shift, slot_theaterName) VALUES ('$timing', '$shift', '$theater')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:slot-index.php?addMessage=Added Successfully");
    }
?>