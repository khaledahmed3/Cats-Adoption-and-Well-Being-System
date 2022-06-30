<?php

$connection = new mysqli('localhost', 'root', '', 'fyp');
session_start();


if (isset($_POST['approved'])) {
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $query = "UPDATE adopt_form set status = $status";
    $query_run = mysqli_query($connection, $query);
    header("Location: proposals.php");
}

if (isset($_POST['rejected'])) {
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $query = "UPDATE adopt_form set status = $status";
    $query_run = mysqli_query($connection, $query);
    header("Location: proposals.php");
}
