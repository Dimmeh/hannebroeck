<?php

$res_id = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $res_id = $_POST['res_id'];
        $sqlDelete = "DELETE FROM han_reservation WHERE res_id = '$res_id'";
        if ($conn->query($sqlDelete) === TRUE){
            array_push($success, "De reservering is bijgewerkt.");
        }
}

