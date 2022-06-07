<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin-access Only
                            <a href="admin-create.php" class="btn btn-primary float-end">Add Admin/Provider</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <section class="attendance">
                            <div class="attendance-list">
                                <h1>Users List</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Passwords</th>
                                            <th>Role ID</th>
                                        </tr>
                                    </thead>
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
                                                    <td>
                                                        <a href="admin-view.php?id=<?= $users['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a href="admin-edit.php?id=<?= $users['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="code.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete_admin" value="<?= $users['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
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
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>