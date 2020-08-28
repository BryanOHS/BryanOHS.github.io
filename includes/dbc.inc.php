<?php

$server = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dbName= "forum";

$conn = mysqli_connect($server,$dBUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}