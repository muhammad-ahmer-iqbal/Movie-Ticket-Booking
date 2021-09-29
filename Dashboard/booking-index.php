<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Booking List | Theater.com</title>
    <?php include '..\Assets\dashboard CDNs.html'?>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['Admin']))
        {

        include '..\Assets\dashboard vertical nav.html';
        include '..\Assets\dashboard header.php';
    ?>
    <br>
    <section class="home-section-1">
        <div class="heading">
            <h1 class="display-3 text-center">Bookings</h1>
        </div>
        <div class="container">
            <?php 
                if(@$_GET['delMessage'] == true)
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['delMessage']."</div>";
                }
            ?>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Show</th>
                        <th scope="col">Class</th>
                        <th scope="col">Seat</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM booking";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                $query1 = "SELECT user_name FROM user WHERE user_id = '$row[booking_userName]'";
                                $query2 = "SELECT class_name FROM class WHERE class_id = $row[booking_className]";
                                $query3 = "SELECT movie.movie_name FROM movie JOIN movie_inslot ON $row[booking_movieInSlotId] = movie.movie_id;";
                                $result1 = mysqli_query($conn, $query1);
                                $result2 = mysqli_query($conn, $query2);
                                $result3 = mysqli_query($conn, $query3);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $row['booking_userName'] = $row1['user_name'];
                                }
                                while($row2 = mysqli_fetch_array($result2)){
                                    $row['booking_className'] = $row2['class_name'];
                                }
                                while($row3 = mysqli_fetch_array($result3)){
                                    $row['booking_movieInSlotId'] = $row3['movie_name'];
                                }
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['booking_userName'].'</td>
                                            <td>'.$row['booking_movieInSlotId'].'</td>
                                            <td>'.$row['booking_className'].'</td>
                                            <td>'.$row['booking_seats'].'</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['booking_id'].')">Delete</button>
                                                <a href="data-delete.php?bookingDelete='.$row['booking_id'].'" class="btn btn-outline-danger" id="'.$row['booking_id'].'" style="display: none;">Confirm Delete</a>
                                            </td>
                                        </tr>';
                                $serial++;
                            }
                    
                            mysqli_close($conn);
                        ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php
        }
        else{
            header('location:admin-login.php');
        }
    ?>
</body>
<?php include '..\Assets\dashboard script.html'?>
</html>