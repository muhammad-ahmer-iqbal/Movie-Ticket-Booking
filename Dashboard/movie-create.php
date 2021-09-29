<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $name = $_POST['movie_name'];
        $genre = $_POST['movie_genre'];
        $country = $_POST['movie_country'];
        $language = $_POST['movie_language'];
        $writer = $_POST['movie_writer'];
        $director = $_POST['movie_director'];
        $description = $_POST['movie_description'];
        $trailer = $_POST['movie_trailer'];
        $release = $_POST['movie_releaseDate'];
        // if($release==null){
        //     $release = null;
        // }
        $theater = $_POST['movie_theaterName'];

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["movie_poster"]["name"]);
        $uploadOk;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["movie_poster"]["tmp_name"]);
        session_start();
        if($check !== false) {
            $uploadOk = 1;
        } else {
            header("location:movie-form.php?not_image=File is not an image.");
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            header("location:movie-form.php?already_exist=Sorry, file already exists.");
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["movie_poster"]["size"] > 500000) {
            header("location:movie-form.php?too_large=Sorry, your file is too large.");
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            header("location:movie-form.php?wrong_extension=Sorry, only JPG, JPEG & PNG files are allowed.");
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header("location:movie-form.php?not_uploaded=Sorry, your file was not uploaded.");
        // if everything is ok, try to upload file
        }
        else {
            if (move_uploaded_file($_FILES["movie_poster"]["tmp_name"], $target_file)) {
                $query = "INSERT INTO movie (movie_name, movie_genre, movie_country, movie_language, movie_writer, movie_director, movie_description, movie_trailer, movie_releaseDate, movie_theaterName, movie_poster) VALUES ('$name', '$genre', '$country', '$language', '$writer', '$director', '$description', '$trailer', '$release', '$theater', '$target_file')";

                $ins = mysqli_query($conn, $query);
                mysqli_close($conn);
                header("location:movie-index.php?addMessage=Added Successfully$release");

            } else {
                mysqli_close($conn);
                header("location:movie-form.php?uploading_error=Sorry, there was an error uploading your file.");
            }
        }

    }
?>