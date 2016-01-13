<?php

require_once "config.php";

$sql = "SELECT res_id, res_name, res_date, res_time
        FROM han_reservations
        WHERE res_status = 1";

$result = $conn->query($sql);

$sqlStatusNew = "  SELECT res_id, res_name, res_date, res_time, res_status
                FROM han_reservations
                WHERE res_status = 2";

$resultStatusNew = $conn->query($sqlStatusNew);
