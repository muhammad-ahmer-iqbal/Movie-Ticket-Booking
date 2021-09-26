<?php 

    session_start();
    
    if(isset($_GET['logoutAdmin']))
    {
        session_destroy();
        header('location:admin-login.php');
    } 
    else{
        header('location:dashboard.php');
    }  

?>