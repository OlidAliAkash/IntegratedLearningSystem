<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect("localhost", "root");

mysqli_select_db ($con,'cse311');

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "INSERT INTO contact (name,mail,phone,comment)
VALUES('$name','$mail','$phone','$comment')";

mysqli_query ($con, $query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="section">
        <div>
            <h2 style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder; margin-top: 80px; color: orange; font-size: 34px;">Contact us</h2>
            <h6 style="color: grey; text-align: center;">Please give us your review</h6>
        </div>
<br><br>

        <div class="w-75 m-auto checkout-form">
            <form action="contact.php" method="post">
                <br><br>
                <div class="form-group">
                    <label for="">Name </label>
                    <input type="text" placeholder="Enter your name here" name="name" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Email </label>
                    <input type="email" placeholder="Enter your email address" name="mail" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Mobile </label>
                    <input type="text" placeholder="Enter your contact number here" name="phone" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Comment </label>
                    <textarea name="comment" placeholder="Give us your review here" class="form-control"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-warning" >Submit</button>
            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>