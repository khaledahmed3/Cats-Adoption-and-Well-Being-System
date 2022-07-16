<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("us-cdbr-east-06.cleardb.net", "b6a98a7accba2a", "85cf840c", "heroku_fbe29bfef8d965d");
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
  foreach ($result as $key => $value) {
    // echo print_r($value);

    session_start();
    $_SESSION['username'] = $value['username'];
    $_SESSION['role_id'] = $value['role_id'];
    // echo print_r($_SESSION);

    echo ($value['role_id']);

    if ($value['role_id'] == 1) {
      header('Location: ../admin/admin.php');
    } else if ($value['role_id'] == 3) {
      header('Location: ../provider/service-provider.php');
    } else {
      header('Location: ../index.php');
    }
  }
} else {
  echo "<script>alert('Wrong Email or Password');document.location='../login.php'</script>";
}
