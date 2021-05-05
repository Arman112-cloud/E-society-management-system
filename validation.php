<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection succcessful";
}else{
	echo "No connection";
}
mysqli_select_db($con,'de project');

$name = $_POST['username'];
$pass = $_POST['pass'];

$q = "select * from signup where Username = '$name' && Password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['Username'] = $name;
	header('location:home.html');
}else{
	header('location:index.php');
}


?>