<!DOCTYPE html>
<html lang="eng">

<?php
session_start();
$username = $_SESSION ? $_SESSION['username'] : null;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats</title>
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
            <?php
            if ($username) {
                echo ('<a href="./controllers/logout.controller.php">Logout</a>');
            } else {
                echo ('<a href="login.php">Login</a>');
            }
            ?>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <!-- cats section starts -->

    <div class="heading" style="background:url(images/login-bg.jpg) no-repeat">
        <h1>Cats</h1>
    </div>

    <section class="cats">

        <h1 class="heading-title">Adopt Now</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/cat-1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Bella</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-2.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Charlie</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-3.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Willow</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-4.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Lucy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-5.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Simba</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-6.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Zoe</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-7.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Yeezy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-8.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Luna</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-9.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Milo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-10.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Oliver</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-11.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Leo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat-12.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Loki</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="adopt.php" class="btn">Adopt</a>
                </div>
            </div>

        </div>
        <div class="load-more"><span class="btn">Load More</span></div>
    </section>

    <!-- cats section ends -->


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