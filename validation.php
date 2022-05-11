<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'cse311');

$name = $_POST['user'];
$pass = $_POST['pass'];

$s = "SELECT * from userinfo where user='$name' && pass='$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Username Already Taken; Try another username!";
}
else{
    $reg = "INSERT INTO userinfo (user,pass) VALUES('$name','$pass')";
    header('location:login.php');
}

mysqli_query($con, $reg);

?>



