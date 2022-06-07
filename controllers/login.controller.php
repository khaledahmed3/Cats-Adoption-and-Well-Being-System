<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "fyp");
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
  foreach ($result as $key => $value) {
    // echo print_r($value);

    session_start();
    $_SESSION['username'] = $value['username'];
    $_SESSION['role_id'] = $value['role_id'];
    // echo print_r($_SESSION);
    
    echo($value['role_id']);

    if ($value['role_id'] == 1) {
      header('Location: ../admin.php');
    }
    else if ($value['role_id'] == 3) {
      header('Location: ../service-provider.php');
    }
    else {
      header('Location: ../home.php');
    }
  }
} else {
  echo "<script>alert('Wrong Email or Password');document.location='../login.php'</script>";
}
