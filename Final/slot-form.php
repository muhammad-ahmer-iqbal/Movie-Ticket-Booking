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
        ?> Slot | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>
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
                    echo '<h1 class="display-3 text-center">Edit Slot</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM slot WHERE slot_id = '$editId'";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        $timings = $row['slot_timings'];
                        $shift = $row['slot_shift'];
                        $slottheater = $row['slot_theaterName'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Slot</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$editId != null){
                    echo    '<form action="slot-edit.php" method="POST">
                            <input type="hidden" name="slot_id"/>';
                }
                else{
                    echo '<form action="slot-create.php" method="POST">';
                }
            ?>
                <div class="mb-3">
                    <label class="form-label">Theater</label>
                    <select class="form-select" name="slot_theaterName">
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
                
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Timing</label>
                            <input type="text" class="form-control" name="slot_timings" placeholder="from - to (5 - 7)">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Shift</label>
                            <select class="form-select" name="slot_shift">
                                <option selected>Select Shift</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Evening">Evening</option>
                                    <option value="Night">Night</option>
                                </select>
                        </div>

                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="slot-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
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
                        $("[name=slot_id]").val("'.$editId.'");
                        $("[name=slot_timings]").val("'.$timings.'");
                        $("[name=slot_shift]").val("'.$shift.'");
                        $("[value='.$slottheater.']").attr("selected", true);
                    })
                </script>';
    }

    include 'reuseable code\dashboard script.html';
?>
</html>