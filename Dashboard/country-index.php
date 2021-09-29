<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Country List | Theater.com</title>
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
            <h1 class="display-3 text-center">Country</h1>
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
            <a href="country-form.php" class="btn btn-success btn-md" style="width: 7%; font-weight:600;">Add</a>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Country Password</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM country";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['country_name'].'</td>
                                            <td>
                                                <a href="country-form.php?editId='.$row['country_id'].'" class="btn btn-outline-success">Edit</a>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['country_id'].')">Delete</button>
                                                <a href="data-delete.php?countryDelete='.$row['country_id'].'" class="btn btn-outline-danger" id="'.$row['country_id'].'" style="display: none;">Confirm Delete</a>
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