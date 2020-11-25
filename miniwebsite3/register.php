
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">

    <title>Php</title>
  </head>
  <body>

  <header>
             <!--navigation-->
             <nav>
                 <!--logo-->
                 <a href="#" target="_blank" class="logo">AK13</a>
                 <!--Menu-->
                 <ul>
                    <li><a href="index.php" target="_blank" >Home</a></li>
                    <li><a href="register.php" target="_blank"  class="active">Sign Up</a></li>
                    <li><a href="login.php" target="_blank">Log In</a></li>
                    <li><a href="Contact.php" target="_blank" >Contact</a></li>

                 <ul>
             </nav>
            
         </header>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="username" placeholder="Username" />
    <!-- <input type="text" name="email" placeholder="E-mail" /> -->
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    <!-- <input type="text" name="Phone number" placeholder="Phone number" /> -->
    <!-- <button  class="log" type="submit" name="signup_submit" value="Sign me up"><a href="login.php" target="_blank">Sign me up</a></button> -->
    <input type="submit" value="Register"> 




  </div>
  

      
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    <button class="social-signin facebook"><a href="https://mail.google.com/mail/u/0/" target="_blank">Log in with facebook </a></button  >
    <button class="social-signin twitter"><a href="https://www.facebook.com/" target="_blank">Log in with Twitter</a></button>
    <button class="social-signin google"><a href="https://twitter.com/" target="_blank">Log in with gmail</a></button>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>


    
  </div>
  
  <div class="or">OR</div>
</div>


  </body>
</html>