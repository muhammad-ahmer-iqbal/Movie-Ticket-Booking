<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

    if (@$_GET['theaterDelete']==true){
        $id = $_GET['theaterDelete'];

        $query = "DELETE FROM theater WHERE theater_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:theater-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['addShowDelete']==true){
        $id = $_GET['addShowDelete'];

        $query = "DELETE FROM movie_inslot WHERE m_inslot_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:addShow-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['adminDelete']==true){
        $id = $_GET['adminDelete'];

        $query = "DELETE FROM admin WHERE admin_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:admin-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['bookingDelete']==true){
        $id = $_GET['bookingDelete'];

        $query = "DELETE FROM booking WHERE booking_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:booking-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['classDelete']==true){
        $id = $_GET['classDelete'];

        $query = "DELETE FROM class WHERE class_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:class-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['countryDelete']==true){
        $id = $_GET['countryDelete'];

        $query = "DELETE FROM country WHERE country_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:country-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['genreDelete']==true){
        $id = $_GET['genreDelete'];

        $query = "DELETE FROM genre WHERE genre_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:genre-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['hallDelete']==true){
        $id = $_GET['hallDelete'];

        $query = "DELETE FROM hall WHERE hall_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:hall-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['languageDelete']==true){
        $id = $_GET['languageDelete'];

        $query = "DELETE FROM language WHERE language_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:language-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['contactDelete']==true){
        $id = $_GET['contactDelete'];

        $query = "DELETE FROM contact_us WHERE contact_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:message-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['movieDelete']==true){
        $id = $_GET['movieDelete'];

        $query = "DELETE FROM movie WHERE movie_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:movie-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['slotDelete']==true){
        $id = $_GET['slotDelete'];

        $query = "DELETE FROM slot WHERE slot_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:slot-index.php?delMessage=Deleted Successfully");
    }
    elseif (@$_GET['userDelete']==true){
        $id = $_GET['userDelete'];

        $query = "DELETE FROM user WHERE user_id = '$id'";

        $del = mysqli_query($conn, $query);

        header("location:user-index.php?delMessage=Deleted Successfully");
    }
    else{
        mysqli_close($conn);
    }

    mysqli_close($conn);
?>