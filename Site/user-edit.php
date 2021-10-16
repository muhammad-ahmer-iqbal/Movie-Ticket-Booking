<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        session_start();
        $id = $_SESSION['User'];
        $name = $_POST['user_name'];
        $contact = $_POST['user_contactNo'];
        $age = $_POST['user_age'];

        if (preg_match ("^[a-zA-z]*\s[a-zA-z]*$", $name) ) {  
            $_SESSION['nameError'] = "Only alphabets and whitespace are allowed.";  
        }
        elseif (!preg_match ("/^[0-9]*$/", $contact) ){  
            $_SESSION['contactError'] = "Only numeric value is allowed.";
        }
        elseif (!preg_match ("/^[0-9]*$/", $age) ){  
            $_SESSION['ageError'] = "Only numeric value is allowed.";
        }
        elseif (strlen ($contact) != 11) {  
            $_SESSION['digitError'] = "Mobile must have 11 digits.";  
        }
        else{
            $query = "UPDATE user SET user_name = '$name', user_contactNo = '$contact', user_age = '$age' WHERE user_id = '$id'";

            $ins = mysqli_query($conn, $query);

            mysqli_close($conn);

            header("location:index.php");
        }
        
    }
?>