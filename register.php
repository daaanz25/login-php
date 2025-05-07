<?php 
  include "service/database.php";
  
  session_start();
  $register_message = "";

  // Validasi jika user sudah login
  // jika sudah login, redirect ke dashboard.php
  if (isset($_SESSION['is_login'])){
    header("Location: dashboard.php");
  }
  
  // Validasi jika tombol register di klik
  if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_password = hash("sha256", $password);
  

  // Validasi jika username yang sama duah digunakan
  try {
    $sql = "INSERT INTO user (username, password ) VALUES ('$username', '$hash_password')"; 
    if ($db->query($sql)) {
      $register_message = "Data berhasil dibuat, Sialahkan login ";
    } else {
      $register_message = "Silahkan coba lagi";
    }
  } catch (mysqli_sql_exception $e) {
    $register_message = "Username udah terdaftar, silahkan coba lagi";
  }
  $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <?php include "layout/header.html"?>
  <h3>Daftar Akun</h3>
  <i><?=  $register_message ?></i>

  <form action="register.php" method = "post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <button type="submit" name = "register">Daftar Sekarang</button>
  </form>
  <?php include "layout/footer.html"?>
  
</body>
</html>