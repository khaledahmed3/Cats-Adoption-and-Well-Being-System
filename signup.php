<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
        <a href="home.php" class="logo">Cats Adoption and Well-Being</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="cats.php">Cats</a>
            <a href="login.php">Login</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <!-- signup section starts -->

    <div class="heading" style="background:url(images/login-bg.jpg) no-repeat">
        <h1>Register now and join our club!</h1>
    </div>
    <div class="signup">
        <div class="signup-box">
            <h1>Sign Up</h1>
            <h4>It's free and only takes a minute</h4>
            <form action="./controllers/signup.controller.php" method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" />
                <label>Email</label>
                <input type="email" name="email" placeholder="E-mail" />
                <label>Password</label>
                <input type="password" name="password_1" placeholder="Password" />
                <label>Confirm Password</label>
                <input type="password" name="password_2" placeholder="Confirm Password" />
                
                <input type="submit" value="Register" class="btn">

            </form>
            <p>
                By clicking the Sign Up button,you agree to our <br />
                <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
            <p class="para-2">
                Already have an account? <a href="login.php">Login here</a>
            </p>
        </div>
    </div>

    <!-- signup section ends -->

    <!-- footer section starts -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="cats.php"><i class="fas fa-angle-right"></i> Cats</a>
                <a href="profile.php"><i class="fas fa-angle-right"></i> Profile</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About us</a>
                <a href="cats.php"><i class="fas fa-angle-right"></i> Privacy policy</a>
                <a href="profile.php"><i class="fas fa-angle-right"></i> Terms of use</a>
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