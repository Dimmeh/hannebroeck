<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 6-1-2016
 * Time: 15:03
 */


$host = 'localhost';
$username = 'root';
$password = '';
$db = 'hann_reservation';

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];
$success = [];
$successAdmin = [];
