<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Movie List | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>
</head>

<body>
    <?php include 'reuseable code\dashboard vertical nav.html'?>
    <?php include 'reuseable code\dashboard header.html'?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <h1 class="display-3 text-center">Movies</h1>
        </div>
        <div class="container">
            <?php 
                if(@$_GET['addMessage'] == true)
                {
                    echo "<div class='alert alert-success my-3' role='alert'>".$_GET['addMessage']."</div>";
                }
                if(@$_GET['delMessage'] == true)
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['delMessage']."</div>";
                }
                if(@$_GET['editMessage'] == true)
                {
                    echo "<div class='alert alert-info my-3' role='alert'>".$_GET['editMessage']."</div>";
                }
            ?>
            <a href="movie-form.php" class="btn btn-success btn-md" style="width: 7%; font-weight:600;">Add</a>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Trailer</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Country</th>
                        <th scope="col">Language</th>
                        <th scope="col">Writer</th>
                        <th scope="col">Director</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Theater</th>
                        <th scope="col">Description</th>
                        <th scope="col">Poster</th>
                        <th scope="col">More</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM movie";
                    
                            $result = mysqli_query($conn, $query);
                    
                            while($row = mysqli_fetch_array($result)){
                                echo    '<tr>
                                            <th scope="row">'.$row['movie_id'].'</th>
                                            <td>'.$row['movie_name'].'</td>
                                            <td>'.$row['movie_trailer'].'</td>
                                            <td>'.$row['movie_genre'].'</td>
                                            <td>'.$row['movie_country'].'</td>
                                            <td>'.$row['movie_language'].'</td>
                                            <td>'.$row['movie_writer'].'</td>
                                            <td>'.$row['movie_director'].'</td>
                                            <td>'.$row['movie_relasedate'].'</td>
                                            <td>'.$row['movie_theaterName'].'</td>
                                            <td>'.$row['movie_description'].'</td>
                                            <td><img src="'.$row['movie_poster'].'" alt="movie img" width=100% height=100px></td>
                                            <td>
                                                <a href="movie-form.php?editId='.$row['movie_id'].'" class="btn btn-outline-success">Edit</a>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['movie_id'].')">Delete</button>
                                                <a href="data-delete.php?movieDelete='.$row['movie_id'].'" class="btn btn-outline-danger" id="'.$row['movie_id'].'" style="display: none;">Confirm Delete</a>
                                            </td>
                                        </tr>';
                            }
                    
                            mysqli_close($conn);
                        ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
<?php include 'reuseable code\dashboard.html'?>
</html>