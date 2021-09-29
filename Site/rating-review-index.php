<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Rating & Reviews List | Theater.com</title>
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
            <h1 class="display-3 text-center">Rating & Reviews</h1>
        </div>
        <div class="container">
            <?php 
                if($_GET['getId'] == true)
                {
                    $id = $_GET['getId'];
                    $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
                
            ?>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php            
                            $query = "SELECT * FROM rating";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                $query1 = "SELECT user_name FROM user WHERE user_id = '$row[rating_userName]'";
                                $result1 = mysqli_query($conn, $query1);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $row['rating_userName'] = $row1['user_name'];
                                }
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['rating_userName'].'</td>
                                            <td>'.$row['rating_stars'].'</td>
                                        </tr>';
                                $serial++;
                            }
                    ?>
                </tbody>
            </table>
            <br>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Review</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php            
                            $query = "SELECT * FROM review";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                $query1 = "SELECT user_name FROM user WHERE user_id = '$row[review_userName]'";
                                $result1 = mysqli_query($conn, $query1);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $row['review_userName'] = $row1['user_name'];
                                }
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['review_userName'].'</td>
                                            <td>'.$row['review_message'].'</td>
                                            <td>'.$row['review_dateTime'].'</td>
                                        </tr>';
                                $serial++;
                            }
                    
                            mysqli_close($conn);
                        ?>
                </tbody>
            </table>
            <?php
                }
                else{
                    echo '<div class="alert alert-danger" role="alert">No movie is selected!</div>';
                }
            ?>
        </div>
    </section>
    
    <?php
        }
        else{
            header('location:admin-login.php');
        }
    ?>
</body>
<?php include 'reuseable code\dashboard script.html'?>
</html>