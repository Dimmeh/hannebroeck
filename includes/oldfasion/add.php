<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 7-1-2016
 * Time: 11:19
 */

require_once "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['res-time'];
$persons = $_POST['persons'];
$children = $_POST['children'];

$sql = "INSERT INTO han_reservations(reservation_name, reservation_email,
        reservation_phone, reservation_date, reservation_time, reservation_persons,
        reservation_children) VALUES('$name', '$email', '$phone', '$date', '$time', '$persons', '$children')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../thanks.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}