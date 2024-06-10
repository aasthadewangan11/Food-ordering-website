<?php

session_start();
require 'connection.php';
$con = Connect();
//$con = mysqli_connect('localhost','root');


if($con){
	echo "Connection Successful";
} else {
	echo "No Connection";	
}


mysqli_select_db($con, 'foodorder');

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;

$s = " select * from userinfo where username = '$username' ";

	$result = mysqli_query($con, $s);



$num = mysqli_num_rows($result);

if($num == 1){ 

	header('location:foodlist.php');
} else {
	echo '<script>alert("No such user exists. Please register and then login.")</script>';
		echo '<script>window.location="register.html"</script>';
}



?>