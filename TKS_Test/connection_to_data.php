<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "data_break";

$con = mysqli_connect();

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect!");
}


