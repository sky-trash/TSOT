<?php
require_once 'views/header.php';
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
    <main class="main">
      <section>
        <div class="news-lg">
          <article class="news">
            <img src="assets/img/slide4.svg" alt="slide1">
            <h1>В новом обновлении в городской и сельской местности был улучшен рельеф, растительность и сеть дорог.</h1>
          </article>
        </div>
        <div class="news-lg">
          <article class="news">
            <img src="assets/img/slide3.svg" alt="slide2">
            <h1>В новом обновлении при перезарядке оружия рядом со стеной будет учитываться то, как персонаж держит оружие. 
              Это должно снизить вероятность прохождения оружия сквозь стену.</h1>
          </article>
        </div>
        <div class="news-lg">
          <article class="news">
            <img src="assets/img/slide1.svg" alt="slide3">
            <h1>В новом обновлении были исправлены баги с автоматом "АК-47", дымовой гранатой и молотова.
              Так же было затронуто искуственный интелект ботов.</h1>
          </article>
        </div>
        <div class="news-lg">
          <article class="news">
            <img src="assets/img/kartinka.svg" alt="slide4">
            <h1>В новом обновлении появились новые локации и новые элементы для более лучшего погружения в
              игру. Вы
              сможете наслаждаться просторами и видами этой игры.</h1>
          </article>
        </div>
      </section>
    </main>
    <?php
    require_once 'views/footer.php';
    ?>
  </div>
</body>

</html>