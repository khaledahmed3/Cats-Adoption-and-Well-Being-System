<?php

$con = mysqli_connect("us-cdbr-east-06.cleardb.net", "b6a98a7accba2a", "85cf840c", "heroku_fbe29bfef8d965d");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
