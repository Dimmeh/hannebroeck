<?php
    require_once "../includes/oldfasion/config.php";
    $sqlTotal = mysqli_query($conn,"SELECT COUNT(*) AS number
              FROM han_reservations");

    $num = mysqli_fetch_array($sqlTotal);
    $total = $num["number"];

    $sqlToday = mysqli_query($conn, "SELECT * AS today FROM han_reservations");
