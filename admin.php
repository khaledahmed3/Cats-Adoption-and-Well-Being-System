<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$usernarme = $_SESSION ? $_SESSION['username'] : null;
$role_id = $_SESSION ? $_SESSION['role_id'] : null;
if ($role_id != 1) header('Location: home.php');
require 'dbcon.php';
?>

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/users.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="admin.php" class="logo">
                        <img src="images/admin-icon.jpg">
                        <span class=" nav-item">Admin</span>
                    </a></li>
                <li><a href="admin.php">
                        <i class="fas fa-menorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="admin-list.php">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Admins</span>
                    </a></li>
                <li><a href="owner-list-A.php">
                        <i class="fas fa-users"></i>
                        <span class="nav-item">Owners/Cats List</span>
                    </a></li>
                <li><a href="service-provider-list.php">
                        <i class="fas fa-users"></i>
                        <span class="nav-item">Service Providers List</span>
                    </a></li>
                <li><a href="index.php">
                        <i class="fas fa-plus"></i>
                        <span class="nav-item">Add Admin/Provider</span>
                    </a></li>
                <li><a href="./controllers/logout.controller.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">
            <div class="main-top">
                <h1>Dashboard</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <img src="images/pic-1.png">
                    <h4>Sam David</h4>
                    <p>Client</p>
                    <div class="per">

                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="images/pic-2.png">
                    <h4>Balbina Kherr</h4>
                    <p>Client</p>
                    <div class="per">

                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="images/pic-3.png">
                    <h4>Badan John</h4>
                    <p>Client</p>
                    <div class="per">

                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="images/pic-4.png">
                    <h4>Sara David</h4>
                    <p>Client</p>
                    <div class="per">

                    </div>
                    <button>Profile</button>
                </div>
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <h1>User List</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $users) {
                                    ?>
                                    <tr>
                                        <td><?= $users['id']; ?></td>
                                        <td><?= $users['username']; ?></td>
                                        <td><?= $users['email']; ?></td>
                                        <td><?= $users['password']; ?></td>
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
            </section>
        </section>
    </div>

</body>

</html>