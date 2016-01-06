<?php
//Define custom constants to use with project
define("DATA_PATH", dirname(__FILE__) . "/data/");

//Define DB credentials
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "hann_reservation");

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line){
    throw new ErrorException($message. $severity, $severity, $file, $line);
});