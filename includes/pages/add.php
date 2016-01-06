<?php
/**
 * Created by PhpStorm.
 * User: dimmy
 * Date: 6-1-2016
 * Time: 14:50
 */

//Set default empty customer & load POST logic
$customer = new Customer("","","","","","","");
require_once dirname(__FILE__) . "/includes/post-data.php";