<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $name = $_POST['contact_name'];
        $email = $_POST['contact_email'];
        $message = $_POST['contact_message'];
        $date = date("Y-m-d");

        $query = "INSERT INTO contact_us(contact_name, contact_email, contact_message, contact_date) VALUES ('$name', '$email', '$message', '$date')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:index.php");
    }
?>