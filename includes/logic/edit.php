<?php
    //Update the reservation from edit page
    require_once 'detail.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $res_id         = $_POST['id'];
        $name           = strip_tags($_POST['name']);
        $email          = strip_tags($_POST['email']);
        $phone          = $_POST['phone'];
        $date           = $_POST['date'];
        $dateDefault    = date('Y-m-d', strtotime($date));
        $time           = $_POST['res-time'];
        $persons        = $_POST['persons'];
        $children       = $_POST['children'];
        $status         = $_POST['status'];

        $sqlUpdate = "UPDATE han_reservations
                      SET
                        res_name      = '$name',
                        res_email     = '$email',
                        res_phone     = '$phone',
                        res_date      = '$dateDefault',
                        res_time      = '$time',
                        res_persons   = '$persons',
                        res_children  = '$children',
                        res_status    = '$status'
                      WHERE res_id='$res_id'";

        if ($conn->query($sqlUpdate) === TRUE){
            array_push($success, "De reservering is bijgewerkt.");
            header("Location: details.php?getId=".$res_id);
        }
    }