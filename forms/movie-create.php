<?php

$target_dir = "uploads/";

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
        $theater = $_POST['movie_theaterName'];

        $poster = $target_dir . basename($_FILES["movie_poster"]["name"]);
        move_uploaded_file($_FILES["movie_poster"]["tmp_name"], $poster);

        $query = "INSERT INTO 'movie' VALUES('', '$name', '$genre', '$country', '$language', '$writer', '$director', '$description', '$trailer', '$release', '$theater', '$poster')";

        $ins = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:movie-index.php?message=Added Successfully");
    }
?>