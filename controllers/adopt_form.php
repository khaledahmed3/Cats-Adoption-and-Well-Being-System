<?php

   $connection = mysqli_connect('localhost:3306','root','','fyp');

   if(isset($_POST['send'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $catID = $_POST['catID'];
      $address = $_POST['address'];
      $phonenumber = $_POST['phonenumber'];
      $postcode = $_POST['postcode'];

      $request = " insert into adopt_form(username, email, catID, address, phonenumber, postcode) values('$username','$email','$catID','$address','$phonenumber','$postcode') ";
      mysqli_query($connection, $request);

      header('location: ../adopt.php?status=success'); 

   }
   else{
      echo "<script>alert('Empty fields are required');document.location='../adopt.php'</script>";
   }
   