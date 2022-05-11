

<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect("localhost", "root");

mysqli_select_db ($con,'cse311');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$package = $_POST['package'];
$comment = $_POST['comment'];


$query = "INSERT INTO checkout (user,email,mobile,gender,package,comment)
VALUES('$user','$email','$mobile','$gender','$package','$comment')";

mysqli_query ($con, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="section">
        <div>
            <h2 style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder; margin-top: 80px; color: orange; font-size: 34px;">Checkout your product</h2>
            <h6 style="color: grey; text-align: center;">Please give us valid information</h6>
        </div>
<br>


        <div class="w-75 m-auto checkout-form">
            <form action="checkout.php" method="post">
                <br><br>
                <div class="form-group">
                    <label for="">Full Name </label>
                    <input type="text" name="user" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Email </label>
                    <input type="email" name="email" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Mobile </label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Gender </label>
                    <input type="radio" name="gender" value="male" autocomplete="off"> Male
                    <input type="radio" name="gender" value="female" autocomplete="off">Female
                </div>
                <br>

                <div class="form-group">
                    <label for="">Package you want to purchase: </label>
                    <select name="package">
                        <option value="">Select your package >> </option>
                        <option value="Web Develop">Web Development</option>
                        <option value="Graphics Design">Graphics Design</option>
                        <option value="App Development">App Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Python Machine Learning">Python Machine Learning</option>
                        <option value="MySql Database">MySql Database </option>
                        <option value="Ui/Ux Design">UI / Ux Design </option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Comment </label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
                <br>
               <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>