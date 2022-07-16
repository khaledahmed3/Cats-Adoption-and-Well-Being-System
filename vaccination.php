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
    <title>vaccination</title>
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
            <?php
            if ($username) {
                echo ('<a href="notification.php">Notification</a>');
                echo ('<a href="./controllers/logout.controller.php">Logout</a>');
            } else {
                echo ('<a href="login.php">Login</a>');
            }
            ?>

        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>



    </section>
    <!-- header section ends -->


    <div class="heading" style="background:url(images/login-bg.jpg) no-repeat">
        <h1>Vaccinations</h1>
    </div>

    <!-- vaccination section starts  -->

    <section class="about">
        <div class="image">
            <img src="images/Rabies.jpg" alt="">
        </div>

        <div class="content">
            <h3>Rabies</h3>
            <p>Rabies in cats is a viral infection that affects the feline nervous system which includes the brain and spinal cord. All mammals are susceptible to contracting rabies. Rabies can be fatal if left untreated before symptoms appear, however, it is preventable with vaccines.</p>

        </div>

    </section>


    <section class="about">

        <div class="image">
            <img src="images/Feline-Viral.jpg" alt="">
        </div>

        <div class="content">
            <h3>Feline Viral Rhinotracheitis</h3>
            <p>The disease complex is usually self-limiting but can be complicated by secondary bacterial infections. Diagnosis is based on clinical signs and laboratory testing to isolate and identify the agent. Treatment is supportive, with antimicrobial treatment for secondary bacterial infection. Prevention is by vaccination.</p>

        </div>

    </section>


    <section class="about">
        <div class="image">
            <img src="images/Distemper.jpg" alt="">
        </div>

        <div class="content">
            <h3>Feline Distemper</h3>
            <p>Panleukopenia, also known as feline distemper, is an extremely contagious and deadly disease caused by a virus. The virus is spread through contact with an infected cats saliva, urine, blood, nasal discharge, or feces. There is no cure for panleukopenia and, without treatment, it has a high mortality rate.</p>

        </div>


    </section>
    <!-- vaccination section ends  -->


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
                <a href="#"><i class="fas fa-angle-right"></i> About us</a>
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