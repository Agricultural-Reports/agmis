<?php

/**
 *
 * The given params will enable us connect
 * to the DB
 *
 */

$db_host = "localhost";

$db_username = "root";

$db_pass = "";

$db_name = "agprice";


$con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_pass);

$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * Now we include the class file
 * that is going to use this settings file to operate
 *
 */

require_once 'class.process.php';


/**
 * Then we instatiance a new object of the class process
 * with null @params
 */

$db = new process($con);
