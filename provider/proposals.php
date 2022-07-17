<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$usernarme = $_SESSION ? $_SESSION['username'] : null;
$role_id = $_SESSION ? $_SESSION['role_id'] : null;
if ($role_id != 3) header('Location: index.php');
require 'dbcon1.php';
?>

<head>
    <meta charset="UTF-8" />
    <title>Service Provider Dashboard</title>
    <link rel="stylesheet" href="../css/List.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="service-provider.php" class="logo">
                        <i class="fas fa-user"></i>
                        <span class=" nav-item">Provider</span>
                    </a></li>

                <li><a href="owner-list-SV.php">
                        <i class="fas fa-users"></i>
                        <span class="nav-item">List Of Owners/Cats</span>
                    </a></li>
                <li><a href="index1.php">
                        <i class="fas fa-plus"></i>
                        <span class="nav-item">Add Cats</span>
                    </a></li>
                <li><a href="healthcare.php">
                        <i class="fas fa-heart"></i>
                        <span class="nav-item">Healthcare</span>
                    </a></li>
                <li><a href="proposals.php">
                        <i class="fas fa-envelope"></i>
                        <span class="nav-item">Proposals</span>
                    </a></li>
                <li><a href="../controllers/logout.controller.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>
        <section class="attendance">
            <div class="attendance-list">
                <h1>Proposals List</h1>
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
                        $query = "SELECT * FROM adopt_form";
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
                                    <td>
                                        <button class="btn btn-primary" onclick="proposalUpdateState('approved',<?= $adopt_form['catID']; ?>)">Approve</button>
                                        <button class="btn btn-primary" onclick="proposalUpdateState('rejected',<?= $adopt_form['catID']; ?>)">Rejecte</button>

                                    </td>
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