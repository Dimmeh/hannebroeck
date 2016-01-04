<?php
$monthNames = array('Januari','Februari','Maart','April','Mei','Juni','Juli',
    'Augustus','September','Oktober','November','December');

if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");

if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];

$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;

if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
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

$days_in_month = cal_days_in_month(0, $cMonth, $cYear);

$day_count = 1;

?>

<span class="month-container">
      <span class="month">
          <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>"><</a>
      </span>
      <span class="month">
          <?= $monthNames[$cMonth-1].' '.$cYear; ?>
      </span>
      <span class="month">
          <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>">></a>
      </span>
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
        <?php
            while($blank > 0){
        ?>
            <td></td>
        <?php
            $blank = $blank-1.5;
            $day_count++;
            }

            $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
            $maxday = date("t",$timestamp);
            $thismonth = getdate ($timestamp);
            $startday = $thismonth['wday'];
            for ($i=0; $i<($maxday+$startday); $i++) {
                if(($i % 7) == 0 ) echo "<tr>";
                if($i < $startday) echo "<td></td>";
                else echo "<td>". ($i - $startday + 1) . "</td>";
                if(($i % 7) == 6 ) echo "</tr>";
            }
        ?>
    </tbody>
</table>
