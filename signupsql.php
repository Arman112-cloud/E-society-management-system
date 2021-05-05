<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection succcessful";
	header('location:index.php');
}else{
	echo "No connection";
}
mysqli_select_db($con,'de project');

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];



$q = "select * from signup where Username = '$name' && Email = '$email' &&  Phone_number = '$phone' && Password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Already signin";
}else{
	$qy = " insert into signup(Username,Email,Phone_number,Password) values('$name' ,'$email' , '$phone' , '$pass') ";
	mysqli_query($con,$qy);
}

?>