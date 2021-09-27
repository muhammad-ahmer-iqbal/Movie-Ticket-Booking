<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['country_id'];
        $name = $_POST['country_name'];

        $query = "UPDATE country SET country_name = '$name' WHERE country_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:country-index.php?editMessage=Edited Successfully");
    }
?>