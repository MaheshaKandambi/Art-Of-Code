<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'art_of_code2');

$un = $_POST['name'];
$p1 = $_POST['password_1'];

$s = " select * from usertable where name = '$un' && password_1 = '$p1'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1) {
    $_SESSION['username'] = $un;
    header('location:home.php');
    
}
else {
    // header('location:login.php');
    echo "wrong password or username"; 
}
?>