<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['m_inslot_day'];
        $day = $_POST['m_inslot_day'];
        $slot = $_POST['inslot_slotId'];
        $movie = $_POST['m_inslot_movieName'];
        $hall = $_POST['m_inslot_hallNo'];

        $query = "INSERT INTO movie_inslot (m_inslot_day, m_inslot_slotId, m_inslot_movieName, m_inslot_hallNo) VALUES ('$day', '$slot', '$movie', '$hall')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:addShow-index.php?addMessage=Added Successfully");
    }
?>