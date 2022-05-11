
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>


<body>

<div class="section" style="width: 52% !important; margin: auto; margin-top: 10%; box-shadow: 2px 2px 20px rgb(94, 92, 92); padding: 70px 25px; border-radius: 8px; background: linear-gradient(#ff7be2, #b208f5);;">
    <div class="login-box">
            <h3 style="text-align: center; font-weight: bold; color: rgb(107, 106, 104);">Login Form</h3><br>

        <form action="login.php" method="post">
        
          <div class="form-group">
             <label for="">Username</label>
             <input type="text" name="user" placeholder="Enter your username" class="form-control" required>
            </div><br>
            <div class="form-group">
              <label for="">Password</label>
                 <input type="password" placeholder="Enter your password" name="password" class="form-control" required>
            </div><br>
            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-outline-warning">Sign in</button>

                <a href="registration.html" style="margin-left: 30px; color: orange; text-decoration: none; font-weight: bold; font-size: 16px;">Register</a>
            </div>
                
        </form>
                
         </div>
     </div>


    <script>
        history.pushState(null, null, null);
        window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

