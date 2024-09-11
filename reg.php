<?php
$header = "login.php";
$reg = "login.php";
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
    $date =  date('Y-m-d');

    echo $_SESSION["error"];
    unset($_SESSION["error"]);
    ?>
    <main class="register">
      <section class="register-lg">
        <div class="register-lg">
          <h1>Регистрация</h1>
        </div>
        <form method="post" action="controllers/register.php">
          <label for="">СТРАНА/РЕГИОН</label>
          <select name="country" id="select" size="1">
            <option value="Argentina">Аргентина</option>
            <option value="Belarus">Беларусь</option>
            <option value="France">Франция</option>
            <option value="Germany">Германия</option>
            <option value="Russian">Россия</option>
            <option value="China">Китай</option>
            <option value="USA">США</option>
          </select><br>
          <input name="birthday" type="date" value="<?= $date ?>"><br>
          <input name="email" type="email" placeholder="Электронная почта" required><br>
          <input name="password" type="password" placeholder="Пароль" required><br>
          <input name="repassword" type="password" placeholder="Подтвердите пароль" required><br>
          <input name="login" type="text" placeholder="Логин" required><br>
          <input name="sub" type="submit" class="button" value="ЗАРЕГИСТРИРОВАТЬСЯ">
        </form>
      </section>
    </main>

    <?php
    require_once 'views/footer-shop.php';
    ?>
  </div>
</body>

</html>