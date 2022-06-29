<?php 
$dbhost = "localhost:3307";
$dbuser = "localhost";
$dbpass = "";
$dbname = "login_sample_db";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect!");

}