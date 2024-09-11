<?php
require_once "connect.php";

$userId = $_SESSION["users"]["id"];
$moneyId = $_POST["id"];
$card = $_POST["card"];
$number_card = $_POST["number_card"];
$date = $_POST["date"];
$CVC = $_POST["CVC"];
$sub = $_POST["sub"];

$identifier = "#" . rand(1000, 9999);


if (!$userId) {
    $query = "VALUES (NULL,'$card','$moneyId', '$identifier', '$number_card','$date','$CVC')";
} elseif ($userId) {
    $query = "VALUES ('$userId','$card','$moneyId', '$identifier', '$number_card','$date','$CVC')";
}

if ($sub) {
    if ($card && $number_card && $date && $CVC) {
        $sql = "INSERT INTO shop (user_id, card_id, money_id, identifier, number_card, date, cvc) $query";
        $shop = mysqli_query($mysql, $sql);
        if ($shop) {
            $_SESSION["success"] = "Вы успешно оплатили товар";
            $link = "shop.php";
        } else {
            $_SESSION["error"] = "Произошла ошибка обратитесь к админу";
            $link = "shop.php";
        }
    } else {
        $_SESSION["error"] = "Заполнитие все поля";
        $link = "shop.php";
    }
}

header("Location: /$link");
