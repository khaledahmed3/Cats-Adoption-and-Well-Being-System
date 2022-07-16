<?php

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password_1'];
  $passwordConfirmation = $_POST['password_2'];
  
  if($password === $passwordConfirmation)
  {
      $conn = mysqli_connect("localhost","root","","fyp");
      $query = "INSERT INTO `users`(`email`, `username`, `password`) VALUES ('$email','$username','$password')";
      if(mysqli_query($conn,$query))
      {
          session_start();
          $_SESSION['username'] = $username;
          header('Location: ../index.php');
      }
              
      else
          echo "<script>alert('The email you have entered is used');document.location='../signup.php'</script>";
  }
  else
      echo "<script>alert('The password does not match');document.location='../signup.php'</script>";
