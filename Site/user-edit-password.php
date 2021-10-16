<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        session_start();
        $id = $_SESSION['User'];
        $old = $_POST['user_oldPassword'];
        $new = $_POST['user_newPassword'];
        $confirm = $_POST['user_confirmPassword'];

        $query0 = "SELECT user_password FROM user WHERE user_id = '$id'";

        $result0 = mysqli_query($conn, $query0);

        while($row0 = mysqli_fetch_array($result0)){
            $checkPassword = $row0['user_passworrd'];
        }
        if ($old == $checkPassword) {  
            $_SESSION['oldPassword'] = "Old Password is not correct.";  
        }
        elseif ($new == $confirm){  
            $_SESSION['confirmPassword'] = "Password is not matched.";
        }
        else{
            $query = "UPDATE user SET user_password = '$confirm' WHERE user_id = '$id'";

            $ins = mysqli_query($conn, $query);

            mysqli_close($conn);

            header("location:index.php");
        }
        
        mysqli_close($conn);

        header("location:changePassword.php");
    }
?>