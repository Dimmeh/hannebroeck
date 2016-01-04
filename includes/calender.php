<?php
    $date = time();

    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);

    $monthCount = 0;

    if($monthCount < 0){
        $month=date('m', strtotime('-1 month', $month));
        $monthCount = 0;
    }

    if($monthCount > 0){
        $month=date('m', strtotime('+1 month', $month));
        $monthCount = 0;
    }

    $first_day = mktime(0,0,0, $month, 1, $year);

    $title = date('F', $first_day);

    $day_of_week = date('D', $first_day);

    switch($day_of_week){
        case "Sun":
            $blank = 0;
            break;
        case "Mon":
            $blank = 1;
            break;
        case "Tue":
            $blank = 2;
            break;
        case "Wed":
            $blank = 3;
            break;
        case "Thu":
            $blank = 4;
            break;
        case "Fri":
            $blank = 5;
            break;
        case "Sat":
            $blank = 6;
            break;
    }

    $days_in_month = cal_days_in_month(0, $month, $year);

    $day_count = 1;

    $day_num = 1;

?>
<span class="month-container">
  <span class="month" value="<" onclick="<?php $monthCount--; ?>"><</span>
  <span class="month"><?= $title, $year; ?></span>
  <span class="month" value=">" onclick="<?php $monthCount++; ?>">></span>
</span>
<table class="date">
    <thead>
        <tr>
            <th>ma</th>
            <th>di</th>
            <th>wo</th>
            <th>do</th>
            <th>vr</th>
            <th>za</th>
            <th>zo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
            while($blank > 0){
        ?>
                <td></td>
        <?php
                $blank = $blank-1.5;
                $day_count++;
            }
        ?>

        <?php
            while($day_num <= $days_in_month){
        ?>
            <td><?= $day_num; ?></td>
            <?php
            $day_num++;
            $day_count++;
                if ($day_count > 7){
            ?>
        </tr>
        <tr>
            <?php
                    $day_count = 1;
                }
            }
        while($day_count > 1 && $day_count <= 7){
        ?>
            <td></td>
        <?php
            $day_count++;
        }

        ?>
        </tr>
    </tbody>
</table>