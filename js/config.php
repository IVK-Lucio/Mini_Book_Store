<?php
session_start();
$hostname ="localhost";
$username = "nust";
$password = "nust";
$dbname = "studentdb";
$con = mysql_connect($hostname,$username,$password,$dbname) or die(mysql_error()); 
if($con)
{
    mysql_select_db($dbname) or die(mysql_error());
}