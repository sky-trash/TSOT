<?php
$header = "reg.php";
$login = "reg.php";
require_once 'controllers/connect.php';
if ($_SESSION["users"]) {
  header("Location: /");
  die();
} else {
  require_once 'views/header.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Story Of Two</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
  <div class="container">
      <?php
      echo $_SESSION["error"];
      unset($_SESSION["error"]);
      ?>

    <main class="register">
      <section class="register-lg">
        <div class="register-lg-login">
          <h1>Вход</h1>
        </div>
        <form method="post" action="controllers/login.php">
          <input name="login" type="text" placeholder="Логин" required><br>
          <input name="email" type="text" placeholder="Электронная почта" required><br>
          <input name="password" type="password" placeholder="Пароль" required><br>
          <input name="sub" type="submit" class="button" value="ВОЙТИ">
        </form>
      </section>
    </main>

    <?php
    require_once 'views/footer-shop.php';
    ?>
  </div>
</body>

</html>