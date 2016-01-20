<?php
/**
 * Created by PhpStorm.
 * User: dimwe
 * Date: 18-1-2016
 * Time: 12:44
 */
    require_once "logic/config.php";
    //If 3 or more reservations on one day, the date will be disable
    $sql = "SELECT res_date, COUNT(*) FROM han_reservations WHERE res_status IN(1,2) GROUP BY res_date HAVING COUNT(*) >= 3";

    $resultDate = $conn->query($sql);
    $dateBlock = [];
    if($resultDate->num_rows > 0)
    {
        while($row = $resultDate->fetch_assoc())
        {
            array_push($dateBlock, date('Y-m-d', strtotime($row['res_date'])));
        }
    }
