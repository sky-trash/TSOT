<?php
$mysql = require_once "connect.php";

$country = $_POST['country'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$sub = $_POST["sub"];

$sql = "SELECT * FROM users WHERE login = '$login'";
$logins = mysqli_query($mysql, $sql);
$loginsRows = mysqli_num_rows($logins);

if ($sub) {
  if ($country && $birthday && $email && $password && $login) {
    if ($loginsRows == 0) {
      $sql = "INSERT INTO users (country, birthday, email, password, login) 
          VALUES ('$country', '$birthday', '$email', '$password', '$login')";
      $user = mysqli_query($mysql, $sql);
      if ($user) {
        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $users = mysqli_query($mysql, $sql);
        $userData = mysqli_fetch_assoc($users);
        $_SESSION["users"] = array(
          'id' => $userData["id"],
          'country' => $userData["country"],
          'birthday' => $userData["birthday"],
          'email' => $userData["email"],
          'password' => $userData["password"],
          'login' => $userData["login"],
          'role' => $userData["role"],
          'created_at' => $userData["created_at"],
          'update_at' => $userData["update_at"]
        );
        $_SESSION["success"] = "Вы успешно зарегестрировались!";
        $link = "profile.php";
      } else {
        $_SESSION["error"] = "Произошла ошибка обратитесь к Админу";
        $link = "reg.php";
      }
    } else {
      $_SESSION["error"] = "Пользователь с таким логином существует";
      $link = "reg.php";
    }
  } else {
    $_SESSION["error"] = "Заполните все поля";
    $link = "reg.php";
  }
}

header("Location: /$link");
