<?php

if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        session_start();
        $user = $_SESSION['User'];
        $movie = $_POST['movie_id'];
        $rating = $_POST['rating_stars'];
        $review = $_POST['review_message'];
        $date = date("Y-m-d");

        $query1 = "INSERT INTO review(review_message, review_dateTime, review_movieName, review_userName) VALUES ('$review', '$date', '$movie', '$user')";
        $query2 = "INSERT INTO rating(rating_movieName, rating_userName, rating_stars) VALUES ('$movie', '$user', '$rating')";

        $rev = mysqli_query($conn, $query1);
        $rat = mysqli_query($conn, $query2);

        mysqli_close($conn);

        header("location:movie-detail.php?movieId=$movie");
    }
?>