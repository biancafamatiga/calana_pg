<?php 
$database = 'calana_db';
$username = 'root';
$password = '';
$host = 'localhost';

//create connection
if(!$conn = mysqli_connect($host, $username, $password, $database))
{
    die("Connection failed"); 
}
?>
