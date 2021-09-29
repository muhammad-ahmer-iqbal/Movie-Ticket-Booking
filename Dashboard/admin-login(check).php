<?php
    if(isset($_POST['admin']))
    {
        if(empty($_POST['adminID']) || empty($_POST['adminPassword'])){
            header("location:admin-login.php?Error=Please Fill out the fields first");
        }
        else{
            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            $id = $_POST['adminID'];
            $pass = $_POST['adminPassword'];

            $query = "SELECT * FROM admin where admin_id = '$id' and admin_password = '$pass'";

            $result = mysqli_query($conn, $query);

            if(mysqli_fetch_array($result))
            {
                session_start();
                $_SESSION['Admin'] = $id;
                header("location:dashboard.php");
            }
            else{
                header("location:admin-login.php?Error=Incorrect Username or Password");
            }

            mysqli_close($conn);
        }
    }
?>