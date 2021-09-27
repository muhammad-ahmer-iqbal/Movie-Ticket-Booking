<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Class | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>

</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        include 'reuseable code\dashboard vertical nav.html';
        include 'reuseable code\dashboard header.php';
    ?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <?php
                if(@$_GET['editId'] == true){
                    echo '<h1 class="display-3 text-center">Edit Class</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM class WHERE class_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $name = $row['class_name'];
                        $price = $row['class_price'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Class</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$theater != null){
                    echo    '<form action="class-edit.php" method="POST">
                            <input type="hidden" name="class_id"/>';
                }
                else{
                    echo '<form action="class-create.php" method="POST">';
                }
            ?>

                <div class="mb-3">
                    <label class="form-label">Class Name</label>
                    <input type="text" class="form-control" name="class_name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="class_price">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="class-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
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
                        $("[name=class_id]").val("'.$editId.'");
                        $("[name=class_name]").val("'.$name.'");
                        $("[name=class_price]").val("'.$price.'");
                    })
                </script>';
    }

    include 'reuseable code\dashboard script.html';
?>
</html>