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
    $dateFull = new DateTime("2016-01-16 23:59:59");
    $date = date('Y-m-d', strtotime($dateFull));
    $dateToday = date('Y-m-d');
    $dateTotal = "";
    if(date('Y-m-d H:i:s') === $date)
    {
        $dateFull->modify('+7 day');
        $dateTotal =  date('d m', strtotime($date));
    }

    $sqlToday = mysqli_query($conn, "SELECT SUM(res_date) AS numberDate BETWEEN NOW() AND '$date' FROM han_reservations WHERE res_status = 1");
    $numToday = mysqli_fetch_array($sqlToday);
    $today = $numToday['numberDate'];
