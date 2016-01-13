<?php
    require_once "config.php";

    $res_id = $_GET['getId'];
    $sql = "SELECT * FROM han_reservations WHERE res_id = '$res_id' ";
    $result = $conn->query($sql);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $status = $_POST['status'];
        $sqlUpdate = "UPDATE han_reservations SET res_status='$status' WHERE res_id='$res_id'";
        if ($conn->query($sqlUpdate) === TRUE){
            header('Location: details.php?getId='.$res_id);
        }
    }