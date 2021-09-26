<?php

$target_dir = "uploads/";

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        
        $id = $_POST['theater_id'];
        $name = $_POST['theater_name'];
        $place = $_POST['theater_place'];
        $owner = $_POST['theater_owner'];
        $contact = $_POST['theater_contactNo'];
        $email = $_POST['theater_email'];
        $address = $_POST['theater_address'];

        $image = $target_dir . basename($_FILES["theater_image"]["name"]);
        move_uploaded_file($_FILES["theater_image"]["tmp_name"], $image);

        $query = "UPDATE theater SET theater = '$id', theater_name = '$name', theater_place = '$place', theater_owner = '$owner', theater_contactNo = '$contact', theater_email = '$email', theater_address = '$address', theater_image = '$image' WHERE theater_id = $id";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:theater-index.php?editMessage=Edited Successfully");
    }
?>