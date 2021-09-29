<?php

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
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["theater_image"]["name"]);
        $uploadOk;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if($target_file != $target_dir){
            $check = getimagesize($_FILES["theater_image"]["tmp_name"]);
            session_start();
            if($check !== false) {
                $uploadOk = 1;
            } else {
                header("location:theater-form.php?not_image=File is not an image.");
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                header("location:theater-form.php?already_exist=Sorry, file already exists.");
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["theater_image"]["size"] > 500000) {
                header("location:theater-form.php?too_large=Sorry, your file is too large.");
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                header("location:theater-form.php?wrong_extension=Sorry, only JPG, JPEG & PNG files are allowed.");
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                header("location:theater-form.php?not_uploaded=Sorry, your file was not uploaded.");
            // if everything is ok, try to upload file
            }
            else {
                if (move_uploaded_file($_FILES["theater_image"]["tmp_name"], $target_file)) {
                    $query = "UPDATE theater SET theater_name = '$name', theater_place = '$place', theater_owner = '$owner', theater_contactNo = '$contact', theater_email = '$email', theater_address = '$address', theater_image = '$target_file' WHERE theater_id = $id";

                    $ins = mysqli_query($conn, $query);
                    mysqli_close($conn);
                    header("location:theater-index.php?editMessage=Edited Successfully");

                } else {
                    mysqli_close($conn);
                    header("location:theater-form.php?uploading_error=Sorry, there was an error uploading your file.");
                }
            }
        }
        else{
            $query = "UPDATE theater SET theater_name = '$name', theater_place = '$place', theater_owner = '$owner', theater_contactNo = '$contact', theater_email = '$email', theater_address = '$address' WHERE theater_id = $id";

            $ins = mysqli_query($conn, $query);
            mysqli_close($conn);
            header("location:theater-index.php?editMessage=Edited Successfully");
        }
    }
?>