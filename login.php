<?php
session_start();

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db ($con,'cse311');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT* from userinfo where user='$name' && pass='$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$_SESSION["status"] = false;
if($num == 1){
    $_SESSION["status"] = true;
    header('location:home.php');
}
else{
    header('location:wrong-pass.html');
}

?>


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
