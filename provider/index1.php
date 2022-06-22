<?php
session_start();
require 'dbcon1.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Provider CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Provider-access Only
                            <a href="cat-create.php" class="btn btn-primary float-end">Add Cat</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <section class="attendance">
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
                                            <th>image</th>
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
                                                    <td><?= $cats['image']; ?></td>
                                                    <td>
                                                        <a href="cat-view.php?id=<?= $cats['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a href="cat-edit.php?id=<?= $cats['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="code1.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete_cat" value="<?= $cats['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
            <a href="./service-provider.php" class="btn">Provider View</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>