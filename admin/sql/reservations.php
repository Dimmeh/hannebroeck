<?php
    require_once "../includes/oldfasion/config.php";
    //Total of all the reservations
    $sqlTotal = mysqli_query($conn,"SELECT COUNT(*) AS numberTotal FROM han_reservations WHERE res_status = 1");
    $numTotal = mysqli_fetch_array($sqlTotal);
    $total = $numTotal["numberTotal"];

    //Total of the incoming reservations
    $sqlNew = mysqli_query($conn, "SELECT COUNT(*) AS numberNew FROM han_reservations WHERE res_status = 2");
    $numNew = mysqli_fetch_array($sqlNew);
    $new = $numNew["numberNew"];

    //Total of the reservations for the next Saturday
    $sqlToday = mysqli_query($conn, "SELECT * AS today FROM han_reservations");
