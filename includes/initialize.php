<?php
require_once "settings.php";
require_once "classes/customer/Customer.php";
require_once "classes/databases/Database.php";

try {
    //Get db connection
    $db = new Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $connection = $db->getConnection();
}
//$errors = [];
//
//try{
//    //Get current filename to switch between logic
//    $pathParts = explode("/", $_SERVER['SCRIPT_NAME']);
//    $currentFile = dirname(__FILE__) / "/pages/" . $pathParts[count($pathParts) - 1];
//
//    //If the file exist, load logic for this page
//    if (file_exists($currentFile)){
//        require_once $currentFile;
//    }
 catch (Exception $e){
    // Set error
    $errors[] = "Oops, try to fix your error please: ". $e->getMessage() ." on line " . $e->getLine() . " of " . $e->getFile();

}