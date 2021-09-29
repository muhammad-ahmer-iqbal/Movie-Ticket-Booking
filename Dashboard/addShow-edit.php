<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['m_inslot_id'];
        $day = $_POST['m_inslot_day'];
        $slot = $_POST['m_inslot_slotId'];
        $movie = $_POST['m_inslot_movieName'];
        $hall = $_POST['m_inslot_hallNo'];

        $query = "UPDATE movie_inslot SET m_inslot_day = '$day', m_inslot_slotId= '$slot', m_inslot_movieName = '$movie', m_inslot_hallNo = '$hall' WHERE m_inslot_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:addShow-index.php?editMessage=Edited Successfully");
    }
?>