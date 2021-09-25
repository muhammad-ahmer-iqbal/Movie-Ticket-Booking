<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Language | Theater.com</title>
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
                    echo '<h1 class="display-3 text-center">Edit Language</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM language WHERE language_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $name = $row['language_name'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Language</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$language != null){
                    echo '<form action="language-edit.php" method="POST">';
                }
                else{
                    echo '<form action="language-create.php" method="POST">';
                }
            ?>

                <div class="mb-3">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" name="language_name">
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
                        $("[name=language_name]").val("'.$name.'");
                    })
                </script>';
    }
?>
<?php include 'reuseable code\dashboard.html'?>
</html>