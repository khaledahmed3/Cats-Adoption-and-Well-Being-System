<?php

$connection = mysqli_connect('localhost:3306', 'root', '', 'fyp');

if (isset($_POST['send'])) {
    $cat_id = $_POST['cat_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $image = $_POST['image'];

    $request = " insert into cats(cat_id, name, gender, breed, age, image) values('$cat_id','$name','$gender','$breed','$age','$image') ";
    mysqli_query($connection, $request);

    header('location: ../cats.php?status=success');
} else {
    echo "<script>alert('Empty fields are required');document.location='../home.php'</script>";
}
