<?php
    //Logout
    session_start();
    session_destroy();

        header("Location: ../../admin/index.php");
        array_push($errors, "U bent succesvol uitgelogd.");
