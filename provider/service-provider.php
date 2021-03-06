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
                <h1>Client List</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role ID</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = "SELECT * FROM users WHERE role_id=2";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $users) {
                                ?>
                                <tr>
                                    <td><?= $users['id']; ?></td>
                                    <td><?= $users['username']; ?></td>
                                    <td><?= $users['email']; ?></td>
                                    <td><?= $users['role_id']; ?></td>
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
            <div>
                <div class="attendance-list">
                    <h1>Cats List</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Cat ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Breed</th>
                                <th>Age</th>
                                <th>Vaccinated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM cats";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $cats) {
                                    ?>
                                    <tr>

                                        <td><?= $cats['cat_id']; ?></td>
                                        <td><?= $cats['name']; ?></td>
                                        <td><?= $cats['gender']; ?></td>
                                        <td><?= $cats['breed']; ?></td>
                                        <td><?= $cats['age']; ?></td>
                                        <td><?= $cats['vaccinated']; ?></td>

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

    </div>

</body>

</html>