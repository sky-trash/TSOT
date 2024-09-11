<?php
  require_once "controllers/connect.php";
if ($_SESSION["users"]) {
  $header = "profile.php";
} elseif (!$header) {
  $header = "login.php";
}
?>
<!DOCTYPE html>
<html lang="ru">
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
    <header>
      <div class="header">
        <div class="reg-logo">
          <a href="/<?= $header ?>">
            <img src="assets/img/account.png" alt="account">
            <h1>
              <?php
              if ($login) {
                echo "
                РЕГИСТРАЦИЯ
                ";
              } elseif ($reg) {
                echo "
                ВХОД
                ";
              } elseif ($_SESSION["users"]) {
                echo "
                <a href='/controllers/exit.php' class='exit'>ВЫХОД</a>
                ";
              }
              ?>
            </h1>
          </a>
        </div>
        <div class="logo-lg">
          <a href="/index.php">
            <img src="/assets/img/logo.svg" alt="logo">
          </a>
        </div>
      </div>
      <div class="header-lg">
        <nav class="nav">
          <ul>
            <li><a href="/index.php">Об игре</a></li>
            <li><a href="/news.php">Новости</a></li>
            <li><a href="/media.php">Медиа</a></li>
            <li><a href="/support.php">Поддержка</a></li>
            <li><a href="/shop.php">Магазин</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
</body>
</html>