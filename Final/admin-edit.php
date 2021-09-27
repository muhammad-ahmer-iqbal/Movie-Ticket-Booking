<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['admin_id'];
        $password = $_POST['admin_password'];

        $query = "UPDATE admin SET admin_id = '$id', admin_password = '$password' WHERE admin_id = '$id'";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:admin-index.php?editMessage=Edited Successfully");
    }
?>