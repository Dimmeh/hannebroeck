<?php
    //Update the reservation from edit page
    require_once "config.php";

    //Get results of the reservations
    $res_id = $_GET['getId'];
    $sql = "SELECT * FROM han_reservations WHERE res_id = '$res_id' ";
    $result = $conn->query($sql);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submit']))
        {
            if(!isset($_POST['status']))
            {
                array_push($errors, "De status is niet ingevuld. Vul de status in.");
            }
            $res_id = $_POST['id'];
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $dateDefault = date('Y-m-d', strtotime($date));
            $time = $_POST['res-time'];
            $persons = $_POST['persons'];
            $children = $_POST['children'];
            $status = $_POST['status'];

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

            if ($conn->query($sqlUpdate) === TRUE) {
                array_push($success, "De reservering is bijgewerkt.");
                header("Location: details.php?getId=" . $res_id);
            }
        }
        else if(isset($_POST['submitDelete']))
        {
            $res_id = $_POST['id'];

            $sqlRemove = "DELETE FROM han_reservations WHERE res_id = '$res_id'";

            if ($conn->query($sqlRemove) === TRUE) {
                array_push($success, "De reservering is bijgewerkt.");
                header("Location: delete.php");
            }
        }
    }