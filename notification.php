<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <title>Notifications</title>
    <link rel="stylesheet" href="css/List.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <?php
    session_start();
    require './provider/dbcon1.php';
    $username = $_SESSION ? $_SESSION['username'] : null;
    ?>

    <div class="container">
        <nav>
            <ul>
                <li><a href="notifications.php" class="logo">
                        <i class="fas fa-bell"></i>
                        <span class=" nav-item">Notifications</span>
                    </a></li>

                <li><a href="index.php">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="cats.php">
                        <i class="fas fa-cat"></i>
                        <span class="nav-item">Cats</span>
                    </a></li>
                <li><a href="about.php">
                        <i class="fas fa-address-card"></i>
                        <span class="nav-item">About Us</span>
                    </a></li>
                <li><a href="controllers/logout.controller.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>
        <section class="attendance">
            <div class="attendance-list">
                <h1>Requests List</h1>
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
            </div>
        </section>
</body>



<script>
    function proposalUpdateState(status, catId) {
        console.log({
            status,
            catId
        })

        $.ajax({
            type: "POST",
            url: '../controllers/adopt_form.php',
            data: {
                action: "updateState",
                status,
                catId
            },
            success: function(html) {
                alert(html);
            }
        });
    }
</script>

</html>