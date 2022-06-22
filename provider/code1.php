<?php
session_start();
require 'dbcon1.php';

if (isset($_POST['delete_cat'])) {
    $id = mysqli_real_escape_string($con, $_POST['delete_cat']);

    $query = "DELETE FROM cats WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cat Deleted Successfully";
        header("Location: index1.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Cat Not Deleted";
        header("Location: index1.php");
        exit(0);
    }
}

if (isset($_POST['update_cat'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $cat_id = mysqli_real_escape_string($con, $_POST['cat_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $breed = mysqli_real_escape_string($con, $_POST['breed']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $image = mysqli_real_escape_string($con, $_POST['image']);

    $query = "UPDATE cats SET cat_id='$cat_id', name='$name', gender='$gender', breed='$breed',  age='$age',  image='$image' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Cat Updated Successfully";
        header("Location: index1.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Cat Not Updated";
        header("Location: index1.php");
        exit(0);
    }
}


if (isset($_POST['save_cat'])) {
    $cat_id = mysqli_real_escape_string($con, $_POST['cat_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $breed = mysqli_real_escape_string($con, $_POST['breed']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    
    $query = "INSERT INTO cats (cat_id,name,gender,breed,age,image) VALUES ('$cat_id','$name','$gender','$breed','$age','$image')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Cat Added Successfully";
        header("Location: cat-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Cat Not Added";
        header("Location: cat-create.php");
        exit(0);
    }
}
