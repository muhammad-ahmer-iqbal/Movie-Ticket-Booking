<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['genre_id'];
        $name = $_POST['genre_name'];

        $query = "UPDATE genre SET genre_name = '$name' WHERE genre_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:genre-index.php?editMessage=Edited Successfully");
    }
?>