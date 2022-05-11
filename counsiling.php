
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Counsiling</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg" />
    <style>
      body {
        background-color: rgb(252, 252, 252);
      }
      h2 {
        color: orange;
        font-size: 39px;
        text-align: center;
        font-weight: bold;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <nav id="navbar_top">
      <a href="home.php">Home</a>
      <a href="course.html">Courses</a>
      <a href="counsiling.php">Student Counciling</a>
      <a href="contact.php" target="_blank">Contact us</a>
      <button class="btn btn-outline-light"><a href="logout.php">Logout</a></button>
    </nav>

    <div class="container" style="text-align: center">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h3
            style="
              margin-top: 50px;
              color: white;
              text-shadow: 1px 1px 2px black, 0 0 25px rgb(233, 209, 245),
                0 0 5px rgb(237, 41, 255);
              margin-bottom: 10px;
            "
          >
            Welcome to Student Counciling Center
          </h3>
          <br />
          <p
            style="
              text-align: justify;
              font-family: merrywealth;
              font-size: 20px;
              color: gray;
            "
          >
  The North South University-Student Counseling Center (NSU-SCC), under the Office of the Pro Vice Chancellor, functions under the stewardship of Director Mrs. Fariha Harun.

It is a support system for the students of the University, and addresses their emotional well being. It serves as a primary mental health care unit, and as such it offers talking therapy and advice for further referrals. It has no jurisdiction over the academic and administrative affairs of the University. <br> <br>

For appointments, current students can self-refer, or be referred via Faculty, family, and other NSU students by mailing requests to counseling.center@onlinelearning.edu with full name, email, and a valid phone number of the client. 

<br>
<br>


Address:<br>

Level-4, Admin Building <br>
Student Counseling Center <br>
North South University <br>
</p>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12">
          <img
            style="margin-top: 58px; padding-bottom: 40px; max-width: 75%"
            class="img-fluid w-auto"
            src="images/side1.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
<br>
<br><br>
<h1 style="text-align: center; color: orange; font-size: 34px;">Student Counsiling Form</h1>
<h6 style="color: grey; text-align: center;">Please give us valid information</h6>






<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect("localhost", "root");

mysqli_select_db ($con,'cse311');

$user = $_POST['user'];
$age = $_POST['age'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$mname = $_POST['Mname'];
$fname = $_POST['Fname'];
$race = $_POST['race'];
$package = $_POST['package'];
$reason = $_POST['reason'];
$comment = $_POST['comment'];


$query = "INSERT INTO counsiling(Fname,Age,Email,Mobile,Gender,Mother,Father,Race,Package,Reason,Comment)
VALUES('$user','$age','$email','$mobile','$gender','$mname','$fname','$race','$package','$reason','$comment')";

mysqli_query ($con, $query);

?>







<br> <br> 
<div class="w-75 m-auto checkout-form">
            <form action="counsiling.php" method="post">
                <br><br>
                <div class="form-group">
                    <label for="">Full Name </label>
                    <input type="text" name="user" autocomplete="off" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Age </label>
                    <input type="number" name="age" autocomplete="off" class="form-control" required>
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
                    <label for="">Mother Name </label>
                    <input type="text" name="Mname" autocomplete="off" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Father Name </label>
                    <input type="text" name="Fname" autocomplete="off" class="form-control">
                </div>
                <br>
                
                
                <div class="form-group">
                    <label for="">Schedule you want to take: </label>
                    <select name="package">
                        <option value="">Select your timing >>> </option>
                        <option value="Saturday - 8 am to 11 am">Saturday - 8 am to 11 am</option>
                        <option value="Sunday - 8 am to 11 am">Sunday - 8 am to 11 am</option>
                        <option value="Monday - 8 am to 11 am">Monday - 8 am to 11 am</option>
                        <option value="Tuesday - 8 am to 11 am">Tuesday - 8 am to 11 am</option>
                        <option value="Wednesday - 8 am to 11 am">Wednesday - 8 am to 11 am</option>
                        <option value="Thursday - 8 am to 11 am">Thursday - 8 am to 11 am </option>
                        <option value="Friday - 8 am to 11 am">Friday - 8 am to 11 am </option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Reason for referrals </label>
                    <textarea name="reason" class="form-control"></textarea>
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

<br><br><br>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


  </body>
</html>
