<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 7-1-2016
 * Time: 11:19
 */
// Add reservation
require_once "config.php";

$name = "";
$email = "";
$phone = "";
$date = "";
$time = "";
$persons = "";
$children =  "";
$status =  "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = strip_tags(mysqli_real_escape_string($conn,$_POST['name']));
    $email = strip_tags(mysqli_real_escape_string($conn,$_POST['email']));
    $phone = strip_tags(mysqli_real_escape_string($conn,$_POST['phone']));
    $date = strip_tags(mysqli_real_escape_string($conn,$_POST['date']));
    $dateDefault = strip_tags(mysqli_real_escape_string($conn,date('Y-m-d', strtotime($date))));
    $time = strip_tags(mysqli_real_escape_string($conn,$_POST['res-time']));
    $persons = $_POST['persons'];
    $children =  $_POST['children'];
    if(!isset($_POST['status']))
    {
        $status = 2;
    }
    else
    {
        $status = $_POST['status'];
    }
    $sql = "INSERT INTO han_reservations(res_name, res_email, res_phone, res_date, res_time, res_persons, res_children, res_status)
        VALUES('$name', '$email', '$phone', '$dateDefault', '$time', '$persons', '$children', '$status')";


    if(empty($name) || empty($email) || empty($phone) || empty($date) || empty($time) || empty($persons))
    {
        array_push($errors, "U heeft een of meerdere velden niet ingevuld. Probeer het nog eens");
    }
    else if(preg_match('/[0-9]/i', $name))
    {
        array_push($errors, "Dit is geen geldige naam. Alleen letters zijn toegestaan.");
        if(preg_match('/[a-z]/i', $phone))
        {
            array_push($errors, 'Dit is geen geldige telefoonnummer. Alleen cijfers zijn toegestaan.');
        }

        $hour = date('H', strtotime($dateDefault));
        $minutes = date('i', strtotime($dateDefault));
        if(($hour <= "11" && $date >= "19") && ($minutes != 00 || $minutes != 30))
        {
            array_push($errors, 'U kunt alleen tussen 11:00 uur en 19:00 uur om elk uur reserveren. Probeer het nog eens');
        }
    }
    else if($conn->query($sql) === TRUE)
    {
        array_push($success, "Hartelijk dank voor uw reservering. U ontvangt z.s.m. per e-mail bericht van ons of uw reservering akkoord is.");
        $name = "";
        $email = "";
        $phone = "";
        $date = "";
        $time = "";
        $persons = "";
        $children =  "";
        $status =  "";
    }
}




