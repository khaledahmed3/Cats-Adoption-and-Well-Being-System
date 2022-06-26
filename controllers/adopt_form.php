<?php

$connection = new mysqli('localhost', 'root', '', 'fyp');
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
