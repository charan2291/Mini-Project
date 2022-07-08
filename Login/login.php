<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bloom-Dark Ever</title>
    <link rel="icon" href="logo.jpeg" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    <div class="container">
      <div class="signin-signup">
        <form action="login.php" class="sign-in-form" method="POST">
          <h2 class="title color">Sign In</h2>
          <?php include('errors.php'); ?>
          <div class="input-field">
            <i class="fas fa-user color"></i>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock color"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" name="login_user" value="Login" class="btn" />
          <p class="social-text color">Or Signin with social platform</p>
          <div class="social-media">
            <a href="#" class="social-icon"> <i class="fab fa-facebook"></i></a
            ><a href="" class="social-icon"><i class="fab fa-twitter"></i></a
            ><a href="" class="social-icon"><i class="fab fa-google"></i></a
            ><a href="" class="social-icon"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </form>
        <form action="login.php" class="sign-up-form" method="POST">
          <h2 class="title color">Sign Up</h2>
          <?php include('errors.php'); ?>
          <div class="input-field">
            <i class="fas fa-user color"></i>
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope color"></i>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock color"></i>
            <input type="password" name="password_1" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock color"></i>
            <input type="password" name="password_2" placeholder="Confirm Password" />
          </div>
          <input type="submit" name="reg_user" value="SignUp" class="btn" />
          <p class="social-text color">Or Signin with social platform</p>
          <div class="social-media">
            <a href="#" class="social-icon"> <i class="fab fa-facebook"></i></a
            ><a href="" class="social-icon"><i class="fab fa-twitter"></i></a
            ><a href="" class="social-icon"><i class="fab fa-google"></i></a
            ><a href="" class="social-icon"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </form>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="logo.jpeg" alt="logo" class="image" />
            <h3>Member of Bloom</h3>
            <p>Bloom-Dark Ever</p>
            <button class="btn" id="sign_in_btn">Signin</button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <img src="logo.jpeg" alt="logo" class="image" />
            <h3>New to Bloom?</h3>
            <p>Bloom-Dark Ever</p>
            <button class="btn" id="sign_up_btn">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <script src="Login.js"></script>
  </body>
</html>
