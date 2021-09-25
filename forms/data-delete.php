<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
if(@$_GET['theaterDelete']==true)
    {
        $id = $_GET['theaterDelete'];

        $query = "DELETE FROM theater WHERE theater_id = '$id'";

        $del = mysqli_query($conn, $query);


        header("location:theater-index.php?delMessage=Deleted Successfully");
    }
    mysqli_close($conn);
?>