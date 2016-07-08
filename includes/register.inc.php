<?php

session_start();

include 'dbh.php';

$first = mysqli_real_escape_string($_POST['first']);
$last  = mysqli_real_escape_string($_POST['last']);
$uid   = mysqli_real_escape_string($_POST['uid']);
$email = mysqli_real_escape_string($_POST['email']);
$pwd   = mysqli_real_escape_string($_POST['pwd']);
$pwd2  = mysqli_real_escape_string($_POST['pwd2']);

$pass_length = strlen($pwd);

if($pwd != $pwd2)
{ 
	header("Location: ../views/register.php?error=pwdverify");
	exit();
}

elseif ($pass_length < 5) {
	header("Location: ../views/register.php?error=passlength");
	exit();
}

elseif (empty($first) or empty($last) or empty($uid) or empty($email) or empty($pwd)) {
	header("Location: ../views/register.php?error=empty");
	exit();
}


else{
	$sql = "SELECT uid FROM users WHERE uid='$uid'";
	$result = $conn->query($sql);
	$uidcheck = mysqli_num_rows($result);
	
	if($uidcheck > 0){
		header("Location: ../views/register.php?error=username");	
	}else{
		$sql = "INSERT INTO users (first, last, uid, email, pwd) VALUES ('$first', '$last', '$uid', '$email', '$pwd' )";
		$result = $conn->query($sql);
		header("Location: ../views/index.php");
	}

}
