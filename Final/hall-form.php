<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Hall | Theater.com</title>
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
                    echo '<h1 class="display-3 text-center">Edit Hall</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM hall WHERE hall_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $seats = $row['hall_availableSeats'];
                        $theater = $row['hall_theaterName'];
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
                if(@$hall != null){
                    echo '<form action="hall-edit.php" method="POST">';
                }
                else{
                    echo '<form action="hall-create.php" method="POST">';
                }
            ?>
                
                <div class="mb-3">
                    <label class="form-label">Hall Name</label>
                    <div class="mb-3">
                            <select class="form-select" name="hall_hallName ">
                                <option selected>Select Theater</option>
                                <?php
                                    while($row = mysqli_fetch_array($hall)){
                                        echo '<option value="' . $row['hall_id'] . '">' . $row['hall_name'] . '</option>';
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
                    <button class="btn btn-outline-dark" type="button">Submit</button>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-outline-danger" type="reset">Reset</button>
                </div>

            </form>
        </div>
    </section>
</body>

</html>