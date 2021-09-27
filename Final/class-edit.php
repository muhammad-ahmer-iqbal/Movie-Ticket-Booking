<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['class_id'];
        $name = $_POST['class_name'];
        $price = $_POST['class_price'];

        $query = "UPDATE class SET class_name = '$name', class_price = '$price' WHERE class_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:class-index.php?editmessage=Edited Successfully");
    }
?>