<?php
    session_start();
    require_once "config.php";


    $userId = "";
    $dbUsername = "";
    $dbPassword = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $sql = "SELECT *
                FROM han_users
                WHERE use_username = '$username'
                LIMIT 1";

        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $userId = $row['use_id'];
                $dbUsername = $row['use_username'];
                $dbPassword = $row['use_password'];
            }
        }

        if($username == $dbUsername && $password == $dbPassword)
        {
            $_SESSION['use_username'] = $username;
            $_SESSION['use_id'] = $userId;
            header('Location: admin.php');
        }
        else
        {
            array_push($errors, "De combinatie van gebruikersnaam en wachtwoord is niet geldig.");
        }
    }