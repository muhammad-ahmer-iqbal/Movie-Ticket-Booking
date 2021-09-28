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
        ?> List | Theater.com</title>
    <?php include 'reuseable code\dashboard CDNs.html';?>
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
                    echo '<h1 class="display-3 text-center">Edit Admin</h1>';

                    $editId = $_GET['editId'];

                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                    $query = "SELECT * FROM admin WHERE admin_id = '$editId'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $id = $row['admin_id'];
                        $password = $row['admin_password'];
                    }

                    mysqli_close($conn);
                }
                else{
                    echo '<h1 class="display-3 text-center">Add Admin</h1>';
                }
                
            ?>
        </div>
        <div class="form">
            <?php
                if(@$editId != null){
                    echo '<form action="admin-edit.php" method="POST">';
                }
                else{
                    echo '<form action="admin-create.php" method="POST">';
                }
            ?>

                <div class="mb-3">
                    <label class="form-label">Admin ID</label>
                    <input type="text" class="form-control" name="admin_id">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="admin_password">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <div class="row">
                        <a href="admin-index.php" class="btn btn-outline-dark col-sm-6">Back</a>
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
                        $("[name=admin_id]").val("'.$id.'");
                        $("[name=admin_password]").val("'.$password.'");
                        $("[name=admin_id]").attr("disabled", true);
                    })
                </script>';
    }

    include 'reuseable code\dashboard script.html';
?>
</html>