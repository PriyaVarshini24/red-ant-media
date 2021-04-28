<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'system'
$conn = mysqli_connect($servername, $username, $password."$dbname");
if(!$conn){
    die('unable to connect to database');
}
   
?>   