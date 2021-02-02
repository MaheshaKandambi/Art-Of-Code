<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','','userregistration');

//mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$mail = $_POST['email'];
$pass1 = $_POST['password_1'];
$pass2 = $_POST['password_2'];

$s = "select * from usertable1 where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo" Username Already Taken";
}else{
    $reg= " insert into usertable1(name , email , password_1 , password_2) values ('$name' , '$email' , '$pass1' , '$pass2')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
