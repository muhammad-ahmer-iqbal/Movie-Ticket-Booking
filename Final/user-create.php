<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $password = $_POST['user_password'];
        $contact = $_POST['user_contactNo'];
        $age = $_POST['user_age'];

        $query = "INSERT INTO user (user_id, user_name, user_password, user_contactNo, user_age) VALUES ('$id', '$name', '$password', '$contact', '$age')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:slot-index.php?addMessage=Added Successfully");
    }
?>