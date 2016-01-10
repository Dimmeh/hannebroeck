<?php
    if(isset($_SESSION['use_id']))
    {
        $userId = $_SESSION['use_id'];
        $username = $_SESSION['use_username'];
    }
    else
    {
        header('Location: index.php');
        die();
    }