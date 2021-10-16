<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $password = $_POST['user_password'];
        $confirmPassword = $_POST['user_confirmPassword'];
        $contact = $_POST['user_contactNo'];
        $age = $_POST['user_age'];

        $query0 = "SELECT user_id FROM user WHERE user_id = '$id'";
        
        $result = mysqli_query($conn, $query0);
        $check = mysqli_num_rows($result);
        if($check == 0){
            session_start();
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
            elseif($password != $confirmPassword){
                $_SESSION['passwordError'] = "Password does not match";
            }
            else{
                $query = "INSERT INTO user (user_id, user_name, user_password, user_contactNo, user_age) VALUES ('$id', '$name', '$password', '$contact', '$age')";
                $ins = mysqli_query($conn, $query);

                mysqli_close($conn);

                header("location:login.php");
            }
            mysqli_close($conn);

            header("location:signup.php");
        }
        else{
            session_start();
            $_SESSION['userExist'] = "This User ID has been already in use.";
            
            mysqli_close($conn);

            header("location:signup.php");
        }
        
    }
?>