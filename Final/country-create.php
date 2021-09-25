<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['country_id'];
        $name = $_POST['country_name'];

        $query = "INSERT INTO 'country' VALUES('', '$name')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:country-index.php?message=Added Successfully");
    }
?>