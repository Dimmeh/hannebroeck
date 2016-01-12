<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 7-1-2016
 * Time: 11:19
 */

require_once "config.php";

$name = "";
$email = "";
$phone = "";
$date = "";
$time = "";
$persons = "";
$children =  "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['res-time'];
    $persons = $_POST['persons'];
    $children =  $_POST['children'];
    $sql = "INSERT INTO han_reservations(res_name, res_email, res_phone, res_date, res_time, res_persons, res_children)
        VALUES('$name', '$email', '$phone', '$date', '$time', '$persons', '$children')";


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
            include_once "../js/error.js";
        }
    }
    else if($conn->query($sql) === TRUE)
    {
        header('Location: thanks.php');
    }
}


