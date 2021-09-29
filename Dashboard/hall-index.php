<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Hall List | Theater.com</title>
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
            <h1 class="display-3 text-center">Halls</h1>
        </div>
        <div class="container">
            <?php 
                if(@$_GET['addMessage'] == true)
                {
                    echo "<div class='alert alert-success my-3' role='alert'>".$_GET['addMessage']."</div>";
                }
                if(@$_GET['delMessage'] == true)
                {
                    echo "<div class='alert alert-danger my-3' role='alert'>".$_GET['delMessage']."</div>";
                }
                if(@$_GET['editMessage'] == true)
                {
                    echo "<div class='alert alert-info my-3' role='alert'>".$_GET['editMessage']."</div>";
                }
            ?>
            <a href="hall-form.php" class="btn btn-success btn-md" style="width: 7%; font-weight:600;">Add</a>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hall Number</th>
                        <th scope="col">Available Seats</th>
                        <th scope="col">Theater</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM hall";
                    
                            $result = mysqli_query($conn, $query);
                            
                            $serial = 1;
                            
                            while($row = mysqli_fetch_array($result)){
                                $query1 = "SELECT theater_name FROM theater WHERE theater_id = $row[hall_theaterName]";
                                $result1 = mysqli_query($conn, $query1);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $row['hall_theaterName'] = $row1['theater_name'];
                                }
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['hall_no'].'</td>
                                            <td>'.$row['hall_availableSeats'].'</td>
                                            <td>'.$row['hall_theaterName'].'</td>
                                            <td>
                                                <a href="hall-form.php?editId='.$row['hall_id'].'" class="btn btn-outline-success">Edit</a>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['hall_id'].')">Delete</button>
                                                <a href="data-delete.php?hallDelete='.$row['hall_id'].'" class="btn btn-outline-danger" id="'.$row['hall_id'].'" style="display: none;">Confirm Delete</a>
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