<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Genre | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>
</head>

<body>
    <?php include 'reuseable code\dashboard vertical nav.html'?>
    <?php include 'reuseable code\dashboard header.html'?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <?php
                if(@$_GET['editId'] == true){
                    echo '<h1 class="display-3 text-center">Edit Genre</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM genre WHERE genre_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $name = $row['genre_name'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Genre</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$theater != null){
                    echo '<form action="genre-edit.php" method="POST">';
                }
                else{
                    echo '<form action="genre-create.php" method="POST">';
                }
            ?>

                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre_name">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-dark" type="button">Submit</button>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-outline-danger" type="reset">Reset</button>
                </div>

            </form>
        </div>
    </section>
</body>
<?php
    if(@$editId != null){
        echo '  <script>
                    $(document).ready(function(){
                        $("[name=genre_name]").val("'.$name.'");
                    })
                </script>';
    }
?>
<?php include 'reuseable code\dashboard.html'?>
</html>