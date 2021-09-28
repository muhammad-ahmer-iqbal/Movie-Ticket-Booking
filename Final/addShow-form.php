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
        ?> Show | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html'?>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        
        $query1 = "SELECT * FROM slot";
        $query2 = "SELECT * FROM hall";
        $query3 = "SELECT * FROM movie";

        $slot = mysqli_query($conn, $query1);
        $hall = mysqli_query($conn, $query2);
        $movie = mysqli_query($conn, $query3);
        
        mysqli_close($conn);

        include 'reuseable code\dashboard vertical nav.html';
        include 'reuseable code\dashboard header.php';
    ?>
    <br>
    <section class="home-section-1">
        <div class="heading">
        <?php
                if(@$_GET['editId'] == true){
                    echo '<h1 class="display-3 text-center">Edit Show</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM movie_inslot WHERE 	m_inslot_id = '$editId'";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                        $name = $row['m_inslot_movieName'];
                        $slot = $row['m_inslot_slotId'];
                        $hall = $row['m_inslot_hallNo'];
                        $day = $row['m_inslot_day'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Show</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$editId != null){
                    echo    '<form action="addShow-edit.php" method="POST">
                            <input type="hidden" name="m_inslot_id"/>';
                }
                else{
                    echo '<form action="addShow-create.php" method="POST">';
                }
            ?>

                <div class="mb-3">
                    <label class="form-label">Movie</label>
                    <select class="form-select" name="m_inslot_movieName">
                        <?php
                            if(@$editId != null){
                                echo '<option>Select Movie</option>';
                            }
                            else{
                                echo '<option selected>Select Movie</option>';
                            }
                            while($row = mysqli_fetch_array($movie)){
                                echo '<option value="' . $row['movie_id'] . '">' . $row['movie_name'] . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slot</label>
                            <select class="form-select" name="m_inslot_slotId">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Slot</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Slot</option>';
                                    }
                                    while($row = mysqli_fetch_array($slot)){
                                        echo '<option value="' . $row['slot_id'] . '">' . $row['slot_timings'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Hall</label>
                            <select class="form-select" name="m_inslot_hallNo">
                                <?php
                                    if(@$editId != null){
                                        echo '<option>Select Hall</option>';
                                    }
                                    else{
                                        echo '<option selected>Select Hall</option>';
                                    }
                                    while($row = mysqli_fetch_array($hall)){
                                        echo '<option value="' . $row['hall_id'] . '">' . $row['hall_no'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Day</label>
                    <select class="form-select" name="m_inslot_day">
                        <?php
                            if(@$editId != null){
                                echo '<option>Select Day</option>';
                            }
                            else{
                                echo '<option selected>Select Day</option>';
                            }
                        ?>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="addShow-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
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
                        $("[name=m_inslot_id]").val("'.$editId.'");
                        $("[value='.$name.']").attr("selected", true);
                        $("[value='.$slot.']").attr("selected", true);
                        $("[value='.$hall.']").attr("selected", true);
                        $("[value='.$day.']").attr("selected", true);
                    })
                </script>';
    }
    
    include 'reuseable code\dashboard script.html';
?>
</html>