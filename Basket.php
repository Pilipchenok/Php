<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .s{
        background-color: #C0C0C0;
        padding: 5px;
    }
    .hr{
        margin-top: 10px;
    }

</style>
<body>
    <img src="../pic/header_photo.png" alt="Header" class='HF'>
    <div class="wrapper">
        <div class='left'>
            <ul class='products'>
                <li><a href="Bikes/Bikes.php">Велосипеды</a></li>
                <ul>
                    <li><a href="Bikes/MTB.php">Горные</a></li>
                    <li><a href="Bikes/Town.php">Городские</a></li>
                    <li><a href="Bikes/Road.php">Шоссейные</a></li>
                    <li><a href="Bikes/Fat.php">Фэтбайки</a></li>
                </ul>
                <li><a href="stuff.php">Запчасти</a></li>
                <li><a href="acc.php">Аксессуары</a></li>
                <li><a href="../html.php">Главная</a></li>
            </ul>
            <a href="Basket.php"><img src="../pic/basket-shopping-solid.png" alt="Basket" width='30%' class='bask'></a>
        </div>
        <div class='content'>
            <p>В вашей корзине пока пусто</p>
            <p class='hr'><a class='s' href="Bikes/Bikes.php">Перейти в покупкам</a></p>
        </div>
    </div>
</body>
</html>