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
    $dateFull = new DateTime("2016-01-14 22:18:00");
    $currentDateTime = date('Y-m-d H:i:s');
    $empty ="";
    var_dump($currentDateTime);
    //Translate to Dutch
    $defaultMonth = $dateFull->format('F');
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

    if($currentDateTime == $dateFull->format("Y-m-d H:i:s"))
    {
        for($i = 1; $i<2; $i++)
        {
            $datePlus = $dateFull->modify('+7 day');
            unset($dateFull);
            $dateFull = new DateTime($datePlus, "Y-m-d H:i:s");
        }
    }

    //Query total upcoming events

    $dateToday = date('Y-m-d');
    $sqlToday = mysqli_query($conn, "  SELECT COUNT(*) AS numberDate
  FROM han_reservations WHERE res_status = 1 AND res_date = '$dateToday' ");
    $numToday = mysqli_fetch_array($sqlToday);
    $today = $numToday['numberDate'];
