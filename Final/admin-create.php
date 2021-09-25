<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['admin_id'];
        $password = $_POST['admin_password'];

        $query = "INSERT INTO 'admin' VALUES('$id', '$password')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:admin-index.php?message=Added Successfully");
    }
?>