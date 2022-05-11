<?php

session_start();
if($_SESSION["status"] != true){
  header ("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Integrated learning Platform</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg" />
  </head>

  <body>
    <!-- Navbar starts -->
    <nav id="navbar_top">
      <a href="home.php">Home</a>
      <a href="course.html">Courses</a>
      <a href="counsiling.php">Student Counciling</a>
      <a href="contact.php" target="_blank">Contact us</a>
      <button class="btn btn-outline-light">
        <a href="logout.php">Logout</a>
      </button>
    </nav>

    <div class="heading-pic">
      <img
        title=""
        class="img-fluid"
        src="images/heading1.jpg"
        alt="navbar image"
      />
    </div>

    <marquee
      scrollamount="14"
      width="100%"
      direction="left"
      height="35px"
      style="
        margin-top: 10px;
        background-color: rgb(231, 231, 231);
        font-size: 18px;
      "
    >
      Hey! Welcome to 'Integrated Learning System'. Our
      Affiliate Marketing Section is under maintanence.  Feel free to reach out to us through the Support Section for any site related assistance.Thank You :)
    </marquee>

    <!-- Our teachers biography -->

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
            Greetings from Integrated Learning System
          </h3>
          <br />
          <p
            style="
              text-align: justify;
              font-family: merrywealth;
              font-size: 25px;
              color: gray;
            "
          >
          Integrated Learning System (ILS) is a online learning platform where learners participate in an online learning course at the same time but in different locations. 
          This allows learners to interact with the instructor and other participants. This type of learning allows learners to go through a course at their own pace and on
          their own schedule.The site provides micro-lectures, instructional videos and practice assignments to help you develop and sharpen your skills. We are partnered
          with other post-secondary schools and offers a well-organised interface.
            
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

    <div class="container" style="margin-top: 60px; text-align: center">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img
            style="max-width: 80%"
            class="img-fluid"
            src="images/side2.jpg"
            alt=""
          />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h3
            style="
              color: white;
              text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 172, 76),
                0 0 5px rgb(248, 142, 21);
              margin-bottom: 10px;
            "
          >
            We are hiring the best teachers
          </h3>
          <br />
          <p
            style="
              text-align: justify;
              font-size: 25px;
              color: rgb(151, 151, 150);
              font-family: merrywealth;
            "
          >
            To keep up with the growth, we are now looking for teachers in
            various parts of the programs. To see our vacant positions and
            apply, click here. If you want to join us and have questions about
            our upcoming positions, do not hesitate to contact us. We offer a
            competitive salary and relocation includes flights to Bangladesh, at
            the start of the contract.We support with accommodation when needed.
            We pay expenses for shipping and baggage up to 20k BDT. Professional
            development is provided (on-site as well as face-to-face workshops).
          </p>
        </div>
      </div>
    </div>

    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
      style="margin-top: 80px"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
      </div>

      <div class="carousel-inner" style="width: 80%; margin: auto">
        <div class="carousel-item active">
          <img
            src="images/heading2.jpg"
            class="img-fluid d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="images/heading1.jpg"
            class="img-fluid d-block w-100"
            alt="..."
          />
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Course Container Starts here-->

    <div
      class="section"
      style="
        padding-left: 11%;
        padding-right: 11%;
        margin-top: 50px;
        margin-bottom: 20px;
      "
    >
      <div class="row">
        <div
          class="col-6 d-flex flex-row"
          style="color: orange; font-size: 32px; font-weight: bold"
        >
          All Courses
        </div>
        <div class="col-6 d-flex flex-row-reverse">
          <a
            href="course.html"
            target="_blank"
            style="
              color: orange;
              padding-left: 10px;
              font-size: 20px;
              font-weight: bold;
            "
          >
            See all</a
          >
        </div>
      </div>
    </div>

    <div class="container" style="padding: 28px">
      <div class="row d-flex justify-content-center">
        <div
          class="col-xl-3 col-lg-3 col-md-3 col-sm-12"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 15px;
          "
        >
          <img class="img-fluid" src="images/course1.jpg" alt="" />
          <p>
          It allows you to combine multiple photos into a single image and can help to remove a person,
          object etc from a photo which otherwise you may not have been able to use.Considered to be a sub-set of Communication Design, Graphic Design is used to create visual content using elements such as photographs, colours, typography, illustrations, and icons.
         
          </p>

          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>

        <div
          class="col-lg-3 col-md-3 col-sm-1"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 15px;
          "
        >
          <img class="img-fluid" src="images/course2.jpg" alt="" />
          <p>
          Graphic design has always been a popular profession, but with more and more technology being introduced into our lives it's becoming an ever more important one too.All kinds of people use 
          all kinds of technology every day.Making that technology as user-friendly as possible is vital, and graphic design is one of the most important elements of this.
          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>
        <div
          class="col-lg-3 col-md-3 col-sm-12"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 14px;
          "
        >
          <img class="img-fluid" src="images/course3.jpg" alt="" />
          <p>
          Start here if you are new to programming or new to Android development. These courses show you how to build Android apps using best practices recommended by Google. 
          No programming experience needed.Build a series of apps in Kotlin, which is the language that the majority of professional Android developers use. The complete course is available now.
         
          </p>
          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>
      </div>
    </div>

    <div class="container" style="margin-bottom: 30px; padding: 28px">
      <div class="row d-flex justify-content-center">
        <div
          class="col-xl-3 col-lg-3 col-md-3 col-sm-12"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 15px;
          "
        >
          <img class="img-fluid" src="images/course1.jpg" alt="" />
          <p>
          It allows you to combine multiple photos into a single image and can help to remove a person,
          object etc from a photo which otherwise you may not have been able to use.Considered to be a sub-set of Communication Design, Graphic Design is used to create visual content using elements such as photographs, colours, typography, illustrations, and icons.
          </p>
          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>
        <div
          class="col-lg-3 col-md-3 col-sm-12"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 15px;
          "
        >
          <img class="img-fluid" src="images/course2.jpg" alt="" />
          <p>
          Graphic design has always been a popular profession, but with more and more technology being introduced into our lives it's becoming an ever more important one too.All kinds of people use 
          all kinds of technology every day.Making that technology as user-friendly as possible is vital, and graphic design is one of the most important elements of this.
          </p>
          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>
        <div
          class="col-lg-3 col-md-3 col-sm-12"
          style="
            box-shadow: 3px 4px 20px gray;
            padding: 10px;
            border-radius: 6px;
            margin: 14px;
          "
        >
          <img class="img-fluid" src="images/course3.jpg" alt="" />
          <p>
          Start here if you are new to programming or new to Android development. These courses show you how to build Android apps using best practices recommended by Google. 
          No programming experience needed.Build a series of apps in Kotlin, which is the language that the majority of professional Android developers use. The complete course is available now.
          </p>
          <a href="checkout.php" target="_blank">
            <button type="button" class="btn btn-outline-warning">
              Enroll Now
            </button></a
          >
        </div>
      </div>
    </div>

    <!-- Image Carousel Starts here -->

    <div
      class="container"
      style="padding: 30px; margin-top: 70px; margin-bottom: 20px"
    >
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img
            src="images/child.jpg"
            class="img-fluid"
            style="width: 90%"
            alt=""
          />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h6 style="color: rgb(160, 159, 159)">
            TOGETHER WE CAN MAKE A DIFFERENCE
          </h6>
          <br />
          <h2
            style="
              font-weight: bold;
              color: rgb(158, 4, 172);
              text-align: justify;
            "
          >
            Every child deserves the chance to learn!
          </h2>
          <br />
          <h5 style="text-align: justify">
            Across the globe, 617 million children are missing basic math and
            reading skills. We’re a nonprofit delivering the education they
            need, and we need your help. You can change the course of a child’s
            life.
          </h5>
          <br />
          <a href="donate.php" target="_blank">
            <button type="button" class="btn btn-warning">Donate Now</button></a
          >
        </div>
      </div>
    </div>

    <br /><br />
    <hr />

    <!-- Footer Section -->

    <div class="footer-basic">
      <footer>
        <div class="social">
          <a href="#"><i class="icon ion-social-instagram"></i></a>
          <a href="#"><i class="icon ion-social-snapchat"></i></a>
          <a href="#"><i class="icon ion-social-twitter"></i></a>
          <a href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="home.php">Home</a></li>
          <li class="list-inline-item"><a href="course.html">Courses</a></li>
          <li class="list-inline-item"><a href="counsiling.php">Counciling</a></li>
          <li class="list-inline-item"><a href="contact.php">Contact</a></li>
        </ul>
        <p class="copyright" style="color: rgb(56, 56, 56); font-weight: bold">
          Developed by Aniya, Marzana, Olid & Priyangana
        </p>
      </footer>
    </div>



    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
          if (window.scrollY > 50) {
            document.getElementById("navbar_top").classList.add("fixed-top");
            // add padding top to show content behind navbar
            navbar_height = document.querySelector(".navbar").offsetHeight;
            document.body.style.paddingTop = navbar_height + "px";
          } else {
            document.getElementById("navbar_top").classList.remove("fixed-top");
            // remove padding top from body
            document.body.style.paddingTop = "0";
          }
        });
      });
    </script>


    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
