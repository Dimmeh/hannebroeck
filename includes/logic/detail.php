<?php
    require_once "config.php";

    //Get results of the reservations
    $res_id = $_GET['getId'];
    $sql = "SELECT * FROM han_reservations WHERE res_id = '$res_id' ";
    $result = $conn->query($sql);

    //Update the new reservation
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_POST['status']))
        {
            array_push($errors, "De status is niet ingevuld. Vul de status in.");
        }
        else
        {
            $status = $_POST['status'];
            $sqlUpdate = "UPDATE han_reservations SET res_status='$status' WHERE res_id='$res_id'";
            if ($conn->query($sqlUpdate) === TRUE){
                header('Location: details.php?getId='.$res_id);
            }
        }
    }