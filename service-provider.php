<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$usernarme = $_SESSION ? $_SESSION['username'] : null;
$role_id = $_SESSION ? $_SESSION['role_id'] : null;
if ($role_id != 3) header('Location: home.php');
?>

<head>
    <meta charset="UTF-8" />
    <title>Service Provider Dashboard</title>
    <link rel="stylesheet" href="css/users.css" />
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
                <li><a href="service-provider.php">
                        <i class="fas fa-menorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="owner-list-SV.php">
                        <i class="fas fa-users"></i>
                        <span class="nav-item">List Of Owners/Cats</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-plus"></i>
                        <span class="nav-item">Add Cats</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-heart"></i>
                        <span class="nav-item">Healthcare</span>
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
                    <h4>Balbina kherr</h4>
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
                    <h4>Salina micheal</h4>
                    <p>Client</p>
                    <div class="per">

                    </div>
                    <button>Profile</button>
                </div>
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <h1>Client List</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role ID</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Sam David</td>
                                <td>Samdavid@gmail.com</td>
                                <td>123456</td>
                                <td>02</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr class="active">
                                <td>02</td>
                                <td>Balbina Kherr</td>
                                <td>Balbinakherr@gmail.com</td>
                                <td>123456</td>
                                <td>02</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Badan John</td>
                                <td>Badanjohn@gmail.com</td>
                                <td>123456</td>
                                <td>02</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Sara David</td>
                                <td>Saradavid@gmail.com</td>
                                <td>123456</td>
                                <td>02</td>
                                <td><button>View</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>

</body>

</html>