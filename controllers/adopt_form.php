<?php

$connection = new mysqli('localhost:3306', 'root', '', 'fyp');

if (isset($_POST['send'])) {
   var_dump($_POST);
   $username = $_POST['username'];
   $email = $_POST['email'];
   $catId = $_POST['catId'];
   $address = $_POST['address'];
   $phonenumber = $_POST['phonenumber'];
   $postcode = $_POST['postcode'];

   $request = " insert into adopt_form(username, email, catID, address, phonenumber, postcode) values('$username','$email', '$catId', '$address','$phonenumber','$postcode') ";
   $result = $connection->query($request);
   echo $result;

   $_SESSION['message'] = "Record has been saved";
   $_SESSION['msg_type'] = "success";
}
