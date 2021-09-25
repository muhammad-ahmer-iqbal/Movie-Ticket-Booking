<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Theater | Theater.com</title>
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
                    echo '<h1 class="display-3 text-center">Edit Theater</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM theater WHERE theater_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $name = $row['theater_name'];
                        $place = $row['theater_place'];
                        $owner = $row['theater_owner'];
                        $contact = $row['theater_contactNo'];
                        $email = $row['theater_email'];
                        $address = $row['theater_address'];
                        $image = $row['theater_image'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Theater</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$theater != null){
                    echo '<form action="theater-edit.php" method="POST" enctype="multipart/form-data">';
                }
                else{
                    echo '<form action="theater-create.php" method="POST" enctype="multipart/form-data">';
                }
            ?>
                <div class="mb-3">
                    <label class="form-label">Theater Name</label>
                    <input type="text" class="form-control" name="theater_name">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Place</label>
                            <input type="text" class="form-control" name="theater_place">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Owner</label>
                            <input type="text" class="form-control" name="theater_owner">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="number" class="form-control" name="theater_contactNo" placeholder="XXXX-XXXXXXX">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="theater_email" placeholder="abc@gmail.com">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="theater_address">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <br>
                            <?php
                                if(@$editId != null){
                                    echo '<img src="'.$image.'" alt="theater img" height=100px class="img-responsive">';
                                }
                            ?>
                            <input type="file" class="form-control form-control-sm" name="theater_image">
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="theater-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
                        <button class="btn btn-dark col-sm-6" type="button">Submit</button>
                    </div>
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
                        $("[name=theater_name]").val("'.$name.'");
                        $("[name=theater_place]").val("'.$place.'");
                        $("[name=theater_owner]").val("'.$owner.'");
                        $("[name=theater_contactNo]").val("'.$contact.'");
                        $("[name=theater_email]").val("'.$email.'");
                        $("[name=theater_address]").val("'.$email.'");
                    })
                </script>';
    }
?>
<?php include 'reuseable code\dashboard.html'?>
</html>