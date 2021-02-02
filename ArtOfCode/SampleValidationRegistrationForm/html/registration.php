<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'art_of_code2');

$un = $_POST['name'];
$em = $_POST['email'];
$p1 = $_POST['password_1'];
$p2 = $_POST['password_2'];

$s = "select * from usertable where name = '$un'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($p1==$p2){

    if($num==1){
        echo "User name already taken";

    }
    else {
        $reg = "insert into usertable(name,email,password_1,password_2) values('$un','$em','$p1','$p2')";
        mysqli_query($con, $reg);
        // echo "Registration Successful"; 
        header('location:success.php');
    }
}
else{
    echo "Password confirmation was wrong"; 
}

?>