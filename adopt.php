<!DOCTYPE html>
<html lang="eng">

<?php
require './controllers/adopt_form.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION && $_SESSION['username'];
}
if (isset($_GET["status"])) :
    echo "<script>alert('Form Submitted Succesfully');</script>";
endif;
?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt</title>
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
                echo ('<a href="./controllers/logout.controller.php">Logout</a>');
            } else {
                echo ('<a href="login.php">Login</a>');
            }
            ?>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->


    <div class="heading" style="background:url(images/bg.png) no-repeat">
        <h1>Adoption Form</h1>
    </div>



    <section class="adopting">

        <h1 class="heading-title">Fill Up The Form!</h1>


        <form action="./controllers/adopt_form.php" method="POST" class="adopt-form">

            <div class="flex">
                <div class="inputBox">
                    <span>Username</span>
                    <input type="text" class="username" placeholder="Enter Your Username" name="username" required="required">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter Your Email" name="email" required="required">
                </div>
                <div class="inputBox">
                    <span>Cat ID</span>
                    <input type="text" class="catId" placeholder="Enter Cat ID" name="catId">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter Your Address" name="address" required="required">
                </div>
                <div class="inputBox">
                    <span>Mobile Number :</span>
                    <input type="tel" placeholder="Enter Your Phone Number" name="phonenumber" required="required">
                </div>
                <div class="inputBox">
                    <span>Post Code :</span>
                    <input type="tel" placeholder="Enter Your Post Code" name="postcode" required="required">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn" name="send" required="required">
        </form>

    </section>

    <!-- adopting section ends -->



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

    <script>
        var getURLparameter = function(paraName) {
            let Parameters = new URLSearchParams(window.location.search);
            return Parameters.get(paraName);
        }

        var catId = getURLparameter('catId');
        var username = getURLparameter('username');

        const catIdInput = document.querySelector('.catId');
        const usernameInput = document.querySelector('.username');

        catIdInput.value = catId;
        usernameInput.value = username;
        console.log(username);
    </script>


    <!-- footer section ends -->


    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>