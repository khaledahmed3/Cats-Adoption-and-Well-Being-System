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

    <title>Admin Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cat Edit
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cats WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $cats = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code1.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $cats['id']; ?>">

                                    <div class="mb-3">
                                        <label>Cat ID</label>
                                        <input type="number" name="cat_id" value="<?= $cats['cat_id']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="name" name="name" value="<?= $cats['name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <input type="name" name="gender" value="<?= $cats['gender']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Breed</label>
                                        <input type="text" name="breed" value="<?= $cats['breed']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="number" name="age" value="<?= $cats['age']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Vaccinated</label>
                                        <input type="text" name="vaccinated" value="<?= $cats['vaccinated']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" value="<?= $cats['image']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_cat" class="btn btn-primary">
                                            Update Cat
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>