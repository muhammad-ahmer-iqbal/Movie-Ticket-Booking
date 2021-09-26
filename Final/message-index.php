<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Message List | Theater.com</title>
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
            <h1 class="display-3 text-center">Messages</h1>
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
                        <th scope="col">Email Address</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM contact_us";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['contact_name'].'</td>
                                            <td>'.$row['contact_email'].'</td>
                                            <td>'.$row['contact_date'].'</td>
                                            <td>'.$row['contact_message'].'</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['contact_id'].')">Delete</button>
                                                <a href="data-delete.php?contactDelete='.$row['contact_id'].'" class="btn btn-outline-danger" id="'.$row['contact_id'].'" style="display: none;">Confirm Delete</a>
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
<?php include 'reuseable code\dashboard script.html'?>
</html>