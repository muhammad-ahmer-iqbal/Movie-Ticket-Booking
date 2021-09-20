<?php

    $target_dir = "uploads/";
    
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'office');

        $name = $_POST['nm'];
        $DOB = $_POST['dob'];

        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

        $query = "insert into employee values(0, '$name', '$DOB', '$target_file')";

        mysqli_query($conn, $query);

        mysqli_close($conn);

        header("location:emp.php?message=Added Successfully");
    }
?>