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
    <title>Home</title>
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

    <!-- home section starts -->


    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide5.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Learn</span>
                        <h3>Discover Cats Breeds</h3>
                        <a href="package.php" class="btn">Explore More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide4.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Learn</span>
                        <h3>Learn More About Cats Behaviour</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide6.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Learn</span>
                        <h3>How do i get the best cat match?</h3>
                        <a href="package.php" class="btn">Learn More</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>



    <!-- home section ends -->


    <!-- service section starts -->

    <section class="services">

        <h1 class="heading-title"> Our Services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/adopt.png" alt="">
                <h3>Adopt a Cat</h3>
                <a href="cats.php" class="btn">Click Here</a>
            </div>

            <div class="box">
                <img src="images/post.png" alt="">
                <h3>Post Your Cat for Adoption</h3>
                <a href="addCat.php" class="btn">Click Here</a>
            </div>

            <div class="box">
                <img src="images/vaccination.jpg" alt="">
                <h3>Vaccination</h3>
                <a href="./provider/healthcare.php" class="btn">Click Here</a>
            </div>

        </div>

    </section>

    <!-- service section ends -->

    <!--home about section starts-->
    <section class="home-about">
        <div class="image">
            <img src="images/about-background.jpeg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!--home about section ends-->

    <!--home cats section starts-->
    <section class="home-cats">

        <h1 class="heading-title"> Cats </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/cat1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bella</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="cats.php" class="btn">Adopt now</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Beach</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="cats.php" class="btn">Adopt now</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cat3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Oscar</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="cats.php" class="btn">Adopt now</a>

                </div>
            </div>
        </div>
        <div class="load-more"><a href="cats.php" class="btn">Load More</a></div>
    </section>
    <!--home cats section ends-->

    <!--home tips section starts-->

    <section class="home-tips">
        <div class="content">
            <h3>Tips</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et quia amet tempore soluta deleniti enim earum dignissimos laborum, doloremque porro provident praesentium? Atque ex quae doloribus eius culpa, numquam esse.</p>
            <a href="cats.php" class="btn">Learn More</a>
        </div>
    </section>





    <!--home tips section ends-->

    <!-- footer section starts -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
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