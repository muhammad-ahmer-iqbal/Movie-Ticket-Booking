<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $contact = $_POST['user_contactNo'];
        $age = $_POST['user_age'];

        $query = "UPDATE user SET user_name = '$name', user_contactNo = '$contact', user_age = $age WHERE user_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:index.php");
    }
?>