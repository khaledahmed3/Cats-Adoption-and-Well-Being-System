<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section starts -->
    <section class="header">
        <a href="index.php" class="logo">Cats Adoption and Well-Being</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="cats.php">Cats</a>
            <a href="signup.php">Signup</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(images/login-bg.jpg) no-repeat">
        <h1>Login</h1>
    </div>

    <!-- login section starts -->

    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div class="login-box">
            <h1>Login</h1>

            <form action="./controllers/login.controller.php" method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" />
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" />
                <input type="submit" value="Login" class="btn" name="login">

            </form>
            <p class="para-2-a">
                Not have an account? <a href="signup.php">Sign Up Here</a>
            </p>
        </div>


        <!-- login section ends -->


        <!-- footer section starts -->
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Quick links</h3>
                    <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                    <a href="cats.php"><i class="fas fa-angle-right"></i> Cats</a>
                    <a href="login.php"><i class="fas fa-angle-right"></i> Login</a>
                </div>

                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> About us</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> 018-2123-403</a>
                    <a href="#"><i class="fas fa-phone"></i> 015-5977-6574</a>
                    <a href="#"><i class="fas fa-envelope"></i> khaledahmed512@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Johor Bahru, Johore, Malaysia, 80200</a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"> <i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                </div>
            </div>

            <div class="credit">
                Created by <span>Khalid Ahmed Sedik</span> | all rights reserved!
            </div>
        </section>
        <!-- footer section ends -->

        <!-- swiper js link -->
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <!-- custom js file link -->
        <script src="js/script.js"></script>

    </body>

    </html>