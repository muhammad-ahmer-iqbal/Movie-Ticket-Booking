<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['genre_id'];
        $name = $_POST['genre_name'];

        $query = "INSERT INTO 'genre' VALUES('', '$name')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:genre-index.php?message=Added Successfully");
    }
?>