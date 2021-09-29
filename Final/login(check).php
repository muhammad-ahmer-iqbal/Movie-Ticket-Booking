<?php
    if(isset($_POST['user']))
    {
        if(empty($_POST['userID']) || empty($_POST['userPassword'])){
            header("location:login.php?Error=Please Fill out the fields first");
        }
        else{
            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            $id = $_POST['userID'];
            $pass = $_POST['userPassword'];

            $query = "SELECT * FROM user where user_id = '$id' and user_password = '$pass'";

            $result = mysqli_query($conn, $query);

            
                if($result)
                {
                    session_start();
                    while($row = mysqli_fetch_array($result)){
                        session_start();
                        $_SESSION['UserName'] = $row['user_name'];
                    }
                    $_SESSION['User'] = $id;
                    header("location:index.php");
                }
                else{
                    header("location:login.php?Error=Incorrect Username or Password");
                }

            mysqli_close($conn);
        }
    }
?>