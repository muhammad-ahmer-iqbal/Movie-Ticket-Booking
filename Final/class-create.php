<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        // $id = $_POST['class_id'];
        $name = $_POST['class_name'];
        $price = $_POST['class_price'];

        $query = "INSERT INTO class (class_name, class_price) VALUES ('$name', '$price')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:class-index.php?addMessage=Added Successfully");
    }
?>