<?php

$target_dir = "uploads/";

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $name = $_POST['theater_name'];
        $place = $_POST['theater_place'];
        $owner = $_POST['theater_owner'];
        $contact = $_POST['theater_contactNo'];
        $email = $_POST['theater_email'];
        $address = $_POST['theater_address'];

        $image = $target_dir . basename($_FILES["theater_image"]["name"]);
        move_uploaded_file($_FILES["theater_image"]["tmp_name"], $image);

        $query = "INSERT INTO 'theater' VALUES('', '$name', '$place', '$owner', '$contact', '$email', '$address', '$image')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:theater-index.php?message=Added Successfully");
    }
?>