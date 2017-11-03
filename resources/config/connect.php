<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'bbank');
if(!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';
$database='bbank';
//create mysql connection
$mysqli = mysqli_connect($host,$user,$password,$database);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

?>