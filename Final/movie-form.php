<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Movie | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html';?>

</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        
        $query1 = "SELECT * FROM genre";
        $query2 = "SELECT * FROM country";
        $query3 = "SELECT * FROM language";
        $query4 = "SELECT * FROM theater";

        $genre = mysqli_query($conn, $query1);
        $country = mysqli_query($conn, $query2);
        $language = mysqli_query($conn, $query3);
        $theater = mysqli_query($conn, $query4);

        mysqli_close($conn);
        
        include 'reuseable code\dashboard vertical nav.html';
        include 'reuseable code\dashboard header.php';
    ?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <?php
                if(@$_GET['editId'] == true){
                    echo '<h1 class="display-3 text-center">Edit Movie</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM movie WHERE movie_id = '$editId'";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        $name = $row['movie_name'];
                        $genre = $row['movie_genre'];
                        $country = $row['movie_country'];
                        $language = $row['movie_language'];
                        $writer = $row['movie_writer'];
                        $director = $row['movie_director'];
                        $description = $row['movie_description'];
                        $trailer = $row['movie_trailer'];
                        $release = $row['movie_releaseDate'];
                        $movietheater = $row['movie_theaterName '];
                        $poster = $row['movie_poster'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Movie</h1>';
                }
                
                if(@$_GET['not_image'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['not_image']."</div>";
                }
                if(@$_GET['already_exist'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['already_exist']."</div>";
                }
                if(@$_GET['too_large'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['too_large']."</div>";
                }
                if(@$_GET['wrong_extension'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['wrong_extension']."</div>";
                }
                if(@$_GET['not_uploaded'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['not_uploaded']."</div>";
                }
                if(@$_GET['uploading_error'])
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['uploading_error']."</div>";
                }                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$editId != null){
                    echo    '<form action="movie-edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="movie_id"/>';
                }
                else{
                    echo '<form action="movie-create.php" method="POST" enctype="multipart/form-data">';
                }
            ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Movie Name</label>
                            <input type="text" class="form-control" name="movie_name">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <select class="form-select" name="movie_genre">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Genre</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Genre</option>';
                                    }
                                    while($row = mysqli_fetch_array($genre)){
                                        echo '<option value="' . $row['genre_id'] . '">' . $row['genre_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" name="movie_country">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Country</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Country</option>';
                                    }
                                    while($row = mysqli_fetch_array($country)){
                                        echo '<option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Language</label>
                            <select class="form-select" name="movie_language">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Language</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Language</option>';
                                    }
                                    while($row = mysqli_fetch_array($language)){
                                        echo '<option value="' . $row['language_id'] . '">' . $row['language_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Writer</label>
                            <input type="text" class="form-control" name="movie_writer">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Director</label>
                            <input type="text" class="form-control" name="movie_director">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Trailer</label>
                            <input type="url" class="form-control" placeholder="Enter URL" name="movie_trailer">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Theater Name</label>
                            <select class="form-select" name="movie_theaterName">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Theater</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Theater</option>';
                                    }
                                    while($row = mysqli_fetch_array($theater)){
                                        echo '<option value="' . $row['theater_id'] . '">' . $row['theater_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Release Date</label>
                    <input type="date" class="form-control" name="movie_releaseDate">
                </div>

                <div class="mb-3">
                    <label class="form-label">Movie Poster</label>
                    <br>
                    <?php
                        if(@$editId != null){
                            echo '<img src="'.$poster.'" alt="theater img" height=100px class="img-responsive">';
                        }
                    ?>
                    <input type="file" class="form-control form-control-sm" name="movie_poser">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="10" name="movie_description"></textarea>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="movie-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
                        <button class="btn btn-dark col-sm-6" type="button" name="submit" value="submit">Submit</button>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-outline-danger" type="reset">Reset</button>
                </div>

            </form>
        </div>
    </section>
    
    <?php
        }
        else{
            header('location:admin-login.php');
        }
    ?>
</body>
<?php
    if(@$editId != null){
        echo '  <script>
                    $(document).ready(function(){
                        $("[name=movie_id]").val("'.$editId.'");
                        $("[name=movie_name]").val("'.$name.'");
                        $("[value='.$genre.']").attr("selected", true);
                        $("[value='.$country.']").attr("selected", true);
                        $("[value='.$language.']").attr("selected", true);
                        $("[name=movie_writer]").val("'.$writer.'");
                        $("[name=movie_director]").val("'.$director.'");
                        $("[name=movie_description]").val("'.$description.'");
                        $("[name=movie_trailer]").val("'.$trailer.'");
                        $("[name=movie_releaseDate]").val("'.$release.'");
                        $("[value='.$theater.']").attr("selected", true);
                    })
                </script>';
    }
    
    include 'reuseable code\dashboard script.html';
?>
</html>