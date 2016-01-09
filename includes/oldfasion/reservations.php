<?php

require_once "config.php";

$sql = "SELECT res_id, res_name, res_date, res_time
        FROM han_reservations
        WHERE 1";

$result = $conn->query($sql);
