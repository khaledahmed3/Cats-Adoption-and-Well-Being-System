<?php

$con = mysqli_connect("localhost", "root", "", "fyp");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
