<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_admin'])) {
    $id = mysqli_real_escape_string($con, $_POST['delete_admin']);

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_admin'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role_id = mysqli_real_escape_string($con, $_POST['role_id']);

    $query = "UPDATE users SET username='$username', email='$email', password='$password', role_id='$role_id' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_admin'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role_id = mysqli_real_escape_string($con, $_POST['role_id']);

    $query = "INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password','$role_id')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Admin Created Successfully";
        header("Location: admin-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin Not Created";
        header("Location: admin-create.php");
        exit(0);
    }
}
