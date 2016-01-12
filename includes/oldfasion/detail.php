<?php
    require_once "config.php";

    $res_id = $_GET['getId'];

    $sql = "SELECT * FROM hann_reservation WHERE res_id = '$res_id' ";

    $result = $conn->query($sql);

    var_dump($result);