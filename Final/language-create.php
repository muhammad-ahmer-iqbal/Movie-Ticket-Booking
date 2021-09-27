<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['language_id'];
        $name = $_POST['language_name'];

        $query = "INSERT INTO language (language_name) VALUES ('$name')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:language-index.php?addMessage=Added Successfully");
    }
?>