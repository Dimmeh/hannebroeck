<?php
    //Login with login data
    session_start();
    require_once "config.php";

    $userId = "";
    $dbUsername = "";
    $dbPassword = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $usernameLogin = $_POST['username'];
        $passwordLogin = $_POST['password'];

        $sql = "SELECT *
                FROM han_users
                WHERE use_username = '$usernameLogin'
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

        if($usernameLogin == $dbUsername && $passwordLogin == $dbPassword)
        {
            $_SESSION['use_username'] = $usernameLogin;
            $_SESSION['use_id'] = $userId;
            header('Location: admin.php');
        }
        else
        {
            array_push($errors, "De combinatie van gebruikersnaam en wachtwoord is niet geldig.");
        }
    }