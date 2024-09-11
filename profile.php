<?php
require_once 'controllers/connect.php';
if (!$_SESSION["users"]) {
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
    //echo $_SESSION["success"];
    //unset($_SESSION["success"]);
    ?>
    <main class="main">
      <section class="profile">
        <img src="assets/img/logo.svg" alt="logo">
        <h5 class="profile-lg">Login:</h5>
        <h6 class="profile-lg"><?= $_SESSION["users"]["login"] ?></h6>
        <h5 class="profile-lg">Email:</h5>
        <h6 class="profile-lg"><?= $_SESSION["users"]["email"] ?></h6>
        <a href="/shop.php"><button class="profile-lg-lg">Купить Bits</button></a>
      </section>
    </main>
    <?php
    require_once 'views/footer.php';
    ?>
  </div>
</body>

</html>