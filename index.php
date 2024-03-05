<?php 
    include("connection.php");
    include("signup.php")
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div id="form">
            <h1 id="heading">SignUp Form</h1><br>
            <form name="form" action="signup.php" method="POST">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
                <i class="fa-solid fa-envelope fa-lg"></i>
                <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required></br></br>
                <input type="submit" id="btn" value="SignUp" name = "submit"/>
            </form>
      </div>
      <footer>
            <div class="footer-links">
                <ul>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                    <li><a href="#terms-of-service">Terms of Service</a></li>
                    <li><a href="#privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="social-media">
                <p style="color: aliceblue;">Connect with us:</p>
                <ul>
                    <li><a href="#facebook" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a></li>
                    <li><a href="#twitter" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a></li>
                    <li><a href="#instagram" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a></li>
                    <!-- Add more social media icons as needed -->
                </ul>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>