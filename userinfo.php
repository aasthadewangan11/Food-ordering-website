<?php 
session_start();
require 'connection.php';
$con = Connect();

if($con){
	echo "Connection Successful";
} else {
	echo "No Connection";	
}

mysqli_select_db($con, 'foodorder');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$username = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confp = $_POST['confirmp'];

$s = " select * from userinfo where username = '$username' ";

	$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);

	if($num == 1){ //checks whether any person with the same username exists or not
		echo '<script>alert("User already exists. Please login with your credentials.")</script>';
		echo '<script>window.location="login.html"</script>';
	}else{
		
		$query = " insert into userinfo (firstname,lastname,username,contact,email,password,confirmp) values ('$fname', '$lname', '$username', '$contact', '$email', '$pass', '$confp') ";
		mysqli_query($con,$query);
		echo '<script>alert("Registration Successful. Please login to proceed further.")</script>';
		echo '<script>window.location="login.html"</script>';
	}

?>