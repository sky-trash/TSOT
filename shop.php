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

        <?php
        $user = $_SESSION["users"];
        $user_id = $_SESSION["users"]["id"];
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
        ?>
        <div class="container-lg">

            <?php
            $sql = "SELECT * FROM money";
            $money = mysqli_query($mysql, $sql);
            while ($moneyData = mysqli_fetch_array($money)) {
                echo "
            <div class='card' style='--clr: #938852'>
                <div class='img-box'>
                    <img src='/data_file/images/money.svg' alt='money'>
                </div>
                <div class='content'>
                    <h2>$moneyData[coin] $moneyData[name]</h2>
                    <p>$moneyData[description]</p>
                    <a href='#$moneyData[id]'>КУПИТЬ</a>
                </div>
            </div>

            <div class='popup' id='$moneyData[id]'>
            <a href='#' class='popup_area'></a>
            <div class='popup_form'>
                <div class='popup_content'>
                    <a href='#' class='popup_close'>X</a>
                    <img src='/data_file/images/money.svg' alt=''>

                    <form class='popup__forms' action='/controllers/buy.php' method='post'>
                    <label>Колличество монет</label>
                     <input type='hidden' name='id' value='$moneyData[id]'>
                    <input value='$moneyData[coin]' disabled>
                    <label>Цена</label>
                    <input value='$moneyData[price]' disabled>
                    <label>Платежная система</label>
                    <select class='select' name='card'>
                    <option selected disabled>Выберите платежную систему</option>
                    ";
                $sql = "SELECT * FROM card";
                $card = mysqli_query($mysql, $sql);
                while ($cardData = mysqli_fetch_array($card)) {
                    echo "
                    <option value='$cardData[id]'>$cardData[name_card]</option>
                    ";
                }
                echo "</select>
                <label>Номер карты</label>
                <input name='number_card' type='text' placeholder='0000 0000 0000 0000'>
                
                <div class='requisites'>
                <div>
                <label>Дата</label>
                <input name='date' type='text' placeholder='00/00'>
                </div> 
                <div>
                <label>CVC/CVV</label>
                <input name='CVC' type='text' placeholder='CVC/CVV'>
                </div>    
                </div>
                    <input name='sub' type='submit' class='button' value='КУПИТЬ'>
                </form>

                </div>
            </div>
        </div>
        ";
            }
            ?>
        </div>



    </div>
    <?php
    require_once 'views/footer.php';
    ?>
    </div>
</body>

</html>