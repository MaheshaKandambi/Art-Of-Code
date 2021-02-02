<?php

session_start();

$con = mysqli_connect('localhost','root','','userregistration');

//mysqli_select_db($con, 'userregistration');


$mail = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from usertable1 where email = '$mail' && password_2 = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    header('location:home.html');
}else{
    header('location:login.php');
}
