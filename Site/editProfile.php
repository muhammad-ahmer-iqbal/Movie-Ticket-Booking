<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | movie.com</title>
    <?php include '..\Assets\CDNs.html' ?>
</head>

<body>

    <!-- Sub-header Start -->

    <?php
        session_start();
        if(isset($_SESSION['User']))
        {

        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
        $id = $_SESSION['User'];
        $query = "SELECT * FROM user WHERE user_id = '$id'";

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)){
            $name = $row['user_name'];
            $contact = $row['user_contactNo'];
            $age = $row['user_age'];
        }
        mysqli_close($conn);
        include '..\Assets\header.html';
        // Sub-header End
        echo '<hr class="hr">';
        // Navbar Start
        include '..\Assets\navbar.php';
        // Navbar End
    ?>

    <!-- Index Center Content Start -->

    <div class="contact-us">
        <div class="container mb-3">
            <div class="heading">
                <h1 class="display-3 text-center">
                    Edit Your Profile
                </h1>
            </div>
            <div class="form w-75 mx-auto">
                <form action="user-edit.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User ID</label>
                                <input type="text" class="form-control" value="<?php echo $id; ?>" name="user_id" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?php echo $name; ?>" name="user_name">
                                <?php
                                    if(isset($_SESSION['nameError'])){
                                        echo '<span class="text-danger font-weight-bold">' . $_SESSION['nameError'] . '</span>';
                                        session_destroy();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control" value="<?php echo $contact; ?>" name="user_contactNo">
                                <?php
                                    if(isset($_SESSION['contactError'])){
                                        echo '<span class="text-danger font-weight-bold">' . $_SESSION['contactError'] . '</span>';
                                        session_destroy();
                                    }
                                    if(isset($_SESSION['digitError'])){
                                        echo '<span class="text-danger font-weight-bold">' . $_SESSION['digitError'] . '</span>';
                                        session_destroy();
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" value="<?php echo $age; ?>" name="user_age">
                                <?php
                                    if(isset($_SESSION['ageError'])){
                                        echo '<span class="text-danger font-weight-bold">' . $_SESSION['ageError'] . '</span>';
                                        session_destroy();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-4 w-75 mx-auto">
                        <button class="btn btn-dark" type="submit" name="submit" value="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php
        }
        else{
            header('location:login.php');
        mysqli_close($conn);
        }
        include '..\Assets\footer.html';
    ?>

    <!-- Footer End -->

</body>

</html>