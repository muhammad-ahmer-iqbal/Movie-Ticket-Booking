<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['language_id'];
        $name = $_POST['language_name'];

        $query = "UPDATE language SET language_name = '$name' WHERE language_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:language-index.php?editMessage=Edited Successfully");
    }
?>