<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        session_start();
        $user = $_SESSION['User'];
        $movie = $_POST['booking_movieInSlotId'];
        $class = $_POST['booking_className'];
        $seat = $_POST['booking_seats'];

        $query = "INSERT INTO booking(booking_userName, booking_movieInSlotId, booking_className, booking_seats) VALUES ('$user','$movie','$class','$seat')";

        $ins = mysqli_query($conn, $query);
        
        mysqli_close($conn);

        header("location:booking-form.php?addMessage=Ticket has been Booked");

        
    }
?>