<?php
    require_once "../includes/logic/config.php";

    //Total of all the reservations
    $sqlTotal = mysqli_query($conn,"SELECT COUNT(*) AS numberTotal FROM han_reservations WHERE res_status = 1");
    $numTotal = mysqli_fetch_array($sqlTotal);
    $total = $numTotal["numberTotal"];

    //Total of the incoming reservations
    $sqlNew = mysqli_query($conn, "SELECT COUNT(*) AS numberNew FROM han_reservations WHERE res_status = 2");
    $numNew = mysqli_fetch_array($sqlNew);
    $new = $numNew["numberNew"];

    //Variables date & time for upcoming events
    $dateSaturday = date('Y-m-d' , strtotime('Next Saturday'));

    //Total of the reservations for the next Saturday
    $sqlToday = mysqli_query($conn, "  SELECT COUNT(*) AS numberDate
                                       FROM `han_reservations`
                                       WHERE `res_status` = 1
                                       AND `res_date` = '$dateSaturday' ");
    $numToday = mysqli_fetch_array($sqlToday);
    $today = $numToday['numberDate'];

    //Translate to Dutch
    $defaultMonth = date('F', strtotime($dateSaturday));
    $day = date('d', strtotime($dateSaturday));
    $translateMonth = "";

    switch($defaultMonth)
    {
        case "January":
            $translateMonth = "januari";
            break;
        case "February":
            $translateMonth = "februari";
            break;
        case "March":
            $translateMonth = "maart";
            break;
        case "April":
            $translateMonth = "april";
            break;
        case "May":
            $translateMonth = "mei";
            break;
        case "June":
            $translateMonth = "juni";
            break;
        case "July":
            $translateMonth = "juli";
            break;
        case "August":
            $translateMonth = "augustus";
            break;
        case "September":
            $translateMonth = "september";
            break;
        case "October":
            $translateMonth = "oktober";
            break;
        case "November":
            $translateMonth = "november";
            break;
        case "December":
            $translateMonth = "december";
            break;
        default:
            echo "";
            break;
    }


