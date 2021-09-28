<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>
        <?php
            if(@$_GET['editId'] == true){
                echo 'Edit';
            }
            else{
                echo 'Create';
            }
        ?> Hall | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html';?>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $query = "SELECT * FROM theater";

        $theater = mysqli_query($conn, $query);

        mysqli_close($conn);

        include 'reuseable code\dashboard vertical nav.html';
        include 'reuseable code\dashboard header.php';
    ?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <?php
                if(@$_GET['editId'] == true){
                    echo '<h1 class="display-3 text-center">Edit Hall</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM hall WHERE hall_id = '$editId'";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        $seats = $row['hall_availableSeats'];
                        $halltheater = $row['hall_theaterName'];
                        $hallNo = $row['hall_no'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Hall</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$editId != null){
                    echo    '<form action="hall-edit.php" method="POST">
                            <input type="hidden" name="hall_id"/>';
                }
                else{
                    echo '<form action="hall-create.php" method="POST">';
                }
            ?>
                
                <div class="mb-3">
                    <label class="form-label">Hall Name</label>
                    <div class="mb-3">
                            <select class="form-select" name="hall_hallName ">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Theater</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Theater</option>';
                                    }
                                    while($row1 = mysqli_fetch_array($theater)){
                                        echo '<option value="' . $row1['theater_id'] . '">' . $row1['theater_name'] . '</option>';   
                                    }
                                ?>
                            </select>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Available Seats</label>
                            <input type="number" class="form-control" name="hall_availableSeats">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Hall Number</label>
                            <input type="number" class="form-control" name="hall_no">
                        </div>

                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="hall-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
                        <button class="btn btn-dark col-sm-6" type="submit" name="submit" value="submit">Submit</button>
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
                        $("[name=hall_id]").val("'.$editId.'");
                        $("[name=hall_availableSeats]").val("'.$seats.'");
                        $("[name=hall_no]").val("'.$hallNo.'");
                        $("[value='.$halltheater.']").attr("selected", true);
                    })
                </script>';
    }
    
    include 'reuseable code\dashboard script.html';
?>
</html>