<?php

require_once "config.php";

//Summary of the reservations with approve
$sql = "SELECT res_id, res_name, res_date, res_time
        FROM han_reservations
        WHERE res_status = 1
        ORDER BY res_date";

$resultQuery = $conn->query($sql);

//Summary of the new reservations
$sqlStatusNew = "  SELECT res_id, res_name, res_date, res_time, res_status
                FROM han_reservations
                WHERE res_status = 2
                ORDER BY res_id DESC";

$resultStatusNew = $conn->query($sqlStatusNew);

//Summary of the reservations to the next Saturday
$dateSaturday = date('Y-m-d' , strtotime('Next Saturday'));

$sqlTodaySummary = "SELECT res_id, res_name, res_date, res_time
        FROM han_reservations
        WHERE res_date = '$dateSaturday' AND res_status = 1
        ORDER BY res_time";

$resultTodaySummary = $conn->query($sqlTodaySummary);

$sqlIncorrect = "SELECT res_id, res_name, res_date, res_time
                FROM han_reservations
                WHERE res_status = 0
                ORDER BY res_date";

$resultIncorrect = $conn->query($sqlIncorrect);



