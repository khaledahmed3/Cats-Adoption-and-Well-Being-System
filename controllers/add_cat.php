<?php

$connection = mysqli_connect("us-cdbr-east-06.cleardb.net", "b6a98a7accba2a", "85cf840c", "heroku_fbe29bfef8d965d");

if (isset($_POST['send'])) {
    $cat_id = $_POST['cat_id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $vaccinated = $_POST['vaccinated'];
    $image = $_POST['image'];

    $request = " insert into cats(cat_id, name, gender, breed, age, image, vaccinated, username) values('$cat_id','$name','$gender','$breed','$age','$image', '$vaccinated', '$username') ";
    mysqli_query($connection, $request);

    header('location: ../cats.php?status=success');
} else {
    echo "<script>alert('Empty fields are required');document.location='../index.php'</script>";
}
