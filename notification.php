<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification page</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    session_start();
    require './provider/dbcon1.php';
    $username = $_SESSION ? $_SESSION['username'] : null;
    ?>
    <section class="header">
        <a href="home.php" class="logo">Cats Adoption and Well-Being</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="cats.php">Cats</a>
            <?php
            if ($username) {
                echo ('<a href="notification.php">Requests</a>');
                echo ('<a href="./controllers/logout.controller.php">Logout</a>');
            } else {
                echo ('<a href="login.php">Login</a>');
            }
            ?>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <p>This is your requests</p>

    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Cat ID</th>
                <th>Address</th>
                <th>Mobile number</th>
                <th>Post Code</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM adopt_form WHERE username='$username'";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $adopt_form) {
            ?>
                    <tr>
                        <td><?= $adopt_form['username']; ?></td>
                        <td><?= $adopt_form['email']; ?></td>
                        <td><?= $adopt_form['catID']; ?></td>
                        <td><?= $adopt_form['address']; ?></td>
                        <td><?= $adopt_form['phonenumber']; ?></td>
                        <td><?= $adopt_form['postcode']; ?></td>
                        <td><?= $adopt_form['status']; ?></td>
                    </tr>

            <?php
                }
            } else {
                echo "<h5> No Record Found </h5>";
            }
            ?>


        </tbody>
    </table>
</body>

</html>