<?php

$server = "127.0.0.1";
$user = "root";
$pwd = "lamproot";
$dbn = "vl";

$conn = mysqli_connect("$server" , "$user", "$pwd", "$dbn");

if(!$conn){
	die("Connection failed : ".mysqli_connect_error());
}
