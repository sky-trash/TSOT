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
    <main>
      <div class="main">
        <div class="container">
        <div class="main-lg">
          <img src="assets/img/main.jpg" alt="main">
          <h1><span>The Story Of Two</span></h1>
          <!-- Slider -->
          <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
              <div id="overflow">
                <div class="inner">
                  <div class="slide slide_1">
                    <div class="slide-content">
                      <div class="slider-lg">
                        <p>В новом обновлении были исправлены баги с автоматом "АК-47", дымовой гранатой и молотова. 
                           Так же было затронуто искуственный интелект ботов.
                        </p>
                      </div>
                      <div class="images-slider"><img src="assets/img/slide1.svg" alt=""></div>
                    </div>
                  </div>
                  <div class="slide slide_2">
                    <div class="slide-content">
                      <div class="slider-lg">
                        <p>В новом обновлении появились новые локации и новые элементы для более лучшего погружения в
                          игру. Вы
                          сможете наслаждаться просторами и видами этой игры.</p>
                      </div>
                      <div class="images-slider"><img src="assets/img/kartinka.svg" alt=""></div>
                    </div>
                  </div>
                  <div class="slide slide_3">
                    <div class="slide-content">
                      <div class="slider-lg">
                        <p>В новом обновлении в городской и сельской местности был улучшен рельеф, растительность и сеть дорог.</p>
                      </div>
                      <div class="images-slider"><img src="assets/img/slide4.svg" alt=""></div>
                    </div>
                  </div>
                  <div class="slide slide_4">
                    <div class="slide-content">
                      <div class="slider-lg">
                        <p>В новом обновлении при перезарядке оружия рядом со стеной будет учитываться то, как персонаж держит оружие. Это должно снизить вероятность прохождения оружия сквозь стену.</p>
                      </div>
                      <div class="images-slider"><img src="assets/img/slide3.svg" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="controls">
              <label for="slide1"></label>
              <label for="slide2"></label>
              <label for="slide3"></label>
              <label for="slide4"></label>
            </div>
            <!-- <div id="bullets">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
      </div> -->
          </div>
        </div>
        <div class="main-button">
          <a href="https://store.steampowered.com"><button>STEAM</button></a>
          <a href="https://store.epicgames.com"><button>Epic Games</button></a>
          <a href="https://vkplay.ru/"><button>VK play</button></a>
        </div>
      </div>
</div>
    </main>

    <?php
      require_once 'views/footer.php';
    ?>

  </div>
</body>
</html>