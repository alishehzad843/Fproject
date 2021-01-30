<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "odvs";

$conn =mysqli_connect($servername, $username, $password, $database);

if(!$conn){
die("Connection failed " . mysql_error());
}
else
{
	//echo "connection success";
}