<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Create Theater | Theater.com</title>
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
                if(@$editId != null){
                    echo    '<form action="theater-edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="theater_id"/>';
                }
                else{
                    echo '<form action="theater-create.php" method="POST" enctype="multipart/form-data">';
                }
            ?>
                <div class="mb-3">
                    <label class="form-label">Theater Name</label>
                    <input type="text" class="form-control" name="theater_name" value="<?php echo @$name ?>">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Place</label>
                            <input type="text" class="form-control" name="theater_place" value="<?php echo @$place ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Owner</label>
                            <input type="text" class="form-control" name="theater_owner" value="<?php echo @$owner ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="number" class="form-control" name="theater_contactNo" placeholder="XXXX-XXXXXXX" value="<?php echo @$contact ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="theater_email" placeholder="abc@gmail.com" value="<?php echo @$email ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="theater_address" value="<?php echo @$address ?>">
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
                        <input type="submit" name="submit" value="Submit" class="btn btn-dark col-sm-6">
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
                        $("[name=theater_id]").attr("value", "'.$editId.'");
                        $("[name=theater_name]").attr("value", "'.$name.'");
                        $("[name=theater_place]").attr("value", "'.$place.'");
                        $("[name=theater_owner]").attr("value", "'.$owner.'");
                        $("[name=theater_contactNo]").attr("value", "'.$contact.'");
                        $("[name=theater_email]").attr("value", "'.$email.'");
                        $("[name=theater_address]").attr("value", "'.$email.'");
                        $("[name=theater_image]").attr("value", "'.$image.'");
                    })
                </script>';
    }

    include 'reuseable code\dashboard script.html';
?>
</html>