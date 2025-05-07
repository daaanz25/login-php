<?php 
include "service/database.php";
session_start();

$login_message = "";

// Validasi jika user sudah login
if (isset($_SESSION['is_login'])){
  header("Location: dashboard.php");
}
// Validasi jika tombol login di klik
if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  // hash password
  $hash_password = hash("sha256",$password);

  $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$hash_password'";

  $result  = $db->query($sql);

  // Validasi jika username dan password yang dimasukkan benar
  if ($result->num_rows > 0) {
    echo "Akun ditemukan ";
    $data = $result->fetch_assoc(); 
    header("Location: dashboard.php");
    $_SESSION['username'] = $data['username'];
    $_SESSION['is_login'] = true ;
  } else {
    $login_message = "Username atau password salah"; 
  }
  $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php include "layout/header.html"?>
  <h3>Masuk Akun</h3>
  <i><?= $login_message ?></i>
  <form action="login.php" method = "post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <button type="submit" name= "login">Login</button>
  </form>
  <?php include "layout/footer.html"?>
  
</body>
</html>