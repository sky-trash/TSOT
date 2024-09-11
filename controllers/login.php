<?php
$mysql = require_once "connect.php";

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$sub = $_POST['sub'];

if ($sub) {
  if ($login && $email && $password) {
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $users = mysqli_query($mysql, $sql);
    $userRows = mysqli_num_rows($users);
    $userData = mysqli_fetch_assoc($users);
    if ($userRows == 1) {
      $_SESSION["users"] = array(
        "id" => $userData["id"],
        "country" => $userData["country"],
        "birthday" => $userData["birthday"],
        "email" => $userData["email"],
        "password" => $userData["password"],
        "login" => $userData["login"],
        "role" => $userData["role"],
        "created_at" => $userData["created_at"],
        "update_at" => $userData["update_at"]
      );
      $_SESSION["success"] = "Вы успешно вошли!";
      $link = "profile.php";
    } else {
      $_SESSION["error"] = "Логин или пароль не совпадают";
      $link = "login.php";
    }
  } else {
    $_SESSION["error"] = "Заполните все поля";
    $link = "login.php";
  }
}

header("Location: /$link");
