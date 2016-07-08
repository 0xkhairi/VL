<?php

session_start();

include 'dbh.php';

$uid   = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd   = mysqli_real_escape_string($conn,$_POST['pwd']);

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {

			header("Location: ../views/login.php?error=wrong");


} else {
	// echo "Welcome back ".$uid;
	$_SESSION['id'] = $row['id'];
	header("Location: ../views/index.php");
	exit();
}
