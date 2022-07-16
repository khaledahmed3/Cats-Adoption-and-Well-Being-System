<?php

$connection = new mysqli('"us-cdbr-east-06.cleardb.net", "b6a98a7accba2a", "85cf840c", "heroku_fbe29bfef8d965d"');

session_start();

if (isset($_POST['send'])) {
   var_dump($_POST);
   $username = $_POST['username'];
   $email = $_POST['email'];
   $catId = $_POST['catId'];
   $address = $_POST['address'];
   $phonenumber = $_POST['phonenumber'];
   $postcode = $_POST['postcode'];

   $request = "INSERT INTO adopt_form (username, email, catID, address, phonenumber, postcode) values('$username','$email', '$catId', '$address','$phonenumber','$postcode') ";

   if ($connection->query($request) === TRUE) {
      echo "successful";
   } else {
      echo "not good";
   }

   $_SESSION['message'] = "Record has been saved";
   $_SESSION['msg_type'] = "success";

   header("Location: ../cats.php");
}


if (isset($_POST['action'])) {
   $status = $_POST['status'];
   $catId = $_POST['catId'];

   $query = "UPDATE adopt_form SET status = '$status' WHERE catID = $catId;";
   if ($connection->query($query) === TRUE) {
      echo "Action Has Been Taken! 
Please Refresh This Page To See New Status";
   } else {
      echo "Something Went Wrong!";
   }
}
