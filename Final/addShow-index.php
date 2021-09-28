<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Show List | Theater.com</title>
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
            <h1 class="display-3 text-center">Shows</h1>
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
            <a href="addShow-form.php" class="btn btn-success btn-md" style="width: 7%; font-weight:600;">Add</a>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Hall No</th>
                        <th scope="col">Day</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');
            
                            $query = "SELECT * FROM movie_inslot";
                    
                            $result = mysqli_query($conn, $query);

                            $serial = 1;
                    
                            while($row = mysqli_fetch_array($result)){
                                $query1 = "SELECT movie_name FROM movie WHERE movie_id = $row[m_inslot_movieName]";
                                $query2 = "SELECT slot_timings FROM slot WHERE slot_id = $row[m_inslot_slotId]";
                                $query3 = "SELECT hall_no FROM hall WHERE hall_id = $row[m_inslot_hallNo]";
                                $result1 = mysqli_query($conn, $query1);
                                $result2 = mysqli_query($conn, $query2);
                                $result3 = mysqli_query($conn, $query3);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $row['m_inslot_movieName'] = $row1['movie_name'];
                                }
                                while($row2 = mysqli_fetch_array($result2)){
                                    $row['m_inslot_slotId'] = $row2['slot_timings'];
                                }
                                while($row3 = mysqli_fetch_array($result3)){
                                    $row['m_inslot_hallNo'] = $row3['hall_no'];
                                }
                                echo    '<tr>
                                            <th scope="row">'.$serial.'</th>
                                            <td>'.$row['m_inslot_movieName'].'</td>
                                            <td>'.$row['m_inslot_slotId'].'</td>
                                            <td>'.$row['m_inslot_hallNo'].'</td>
                                            <td>'.$row['m_inslot_day'].'</td>
                                            <td>
                                                <a href="addShow-form.php?editId='.$row['m_inslot_id'].'" class="btn btn-outline-success">Edit</a>
                                                <button type="button" class="btn btn-outline-danger" onclick="del(this, '.$row['m_inslot_id'].')">Delete</button>
                                                <a href="data-delete.php?addShowDelete='.$row['m_inslot_id'].'" class="btn btn-outline-danger" id="'.$row['m_inslot_id'].'" style="display: none;">Confirm Delete</a>
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