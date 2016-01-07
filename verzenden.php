<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 6-1-2016
 * Time: 15:02
 */

require_once 'includes/config.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $query = "   SELECT *
                FROM han_users
                WHERE username = $username AND
                password = $password";

    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
    }
}