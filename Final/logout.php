<?php 

    session_start();
        
    if(isset($_GET['logoutUser']))
    {
        session_destroy();
        header('location:index.php');
    }

?>