<?php 
/* Database connection settings */
error_reporting(0);

$host = 'localhost';
$user = 'root';
$pass ="";
$db = "blogproject";
$con = new mysqli($host,$user,$pass,$db) or die($mysqli->error);



