<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Cat Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cat Add
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code1.php" method="POST">

                            <div class="mb-3">
                                <label>Cat ID</label>
                                <input type="number" name="cat_id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="name" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <input type="name" name="gender" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Breed</label>
                                <input type="text" name="breed" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Vaccinated</label>
                                <input type="text" name="vaccinated" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" value="Upload" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_cat" class="btn btn-primary">Save Cat</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>