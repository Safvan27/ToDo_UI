<?php
define('DB_USER',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"angular");
define('DB_HOST',"localhost");
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
if($mysqli->connect_error)
{
    die("connection failed :" .$mysqli->connect_error);
}
?>