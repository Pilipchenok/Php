<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    form{
        width: 50%;
        margin: auto;
        padding: auto;
    }
    input{
        margin: auto;
    }
    label{
        margin: auto;
    }
    .par{
        margin: 5px;
    }
    .headd{
        font-size: 200%;
    }
    .sucsess{
        width: 100%;
        text-align: center;
    }
</style>
<body>
    <img src="pic/header_photo.png" alt="Header" class='HF'>
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
                <li><a href="html.php">Главная</a></li>
            </ul>
            <a href="Basket.php"><img src="pic/basket-shopping-solid.png" alt="Basket" width='30%' class='bask'></a>
        </div>

        <div class='content'>
        <p class='headd'>Запчасти</p>
        <p>В наш магазин пока ещё ничего не привезли, но вы можете оставить заявку:</p>
            <form action="stuff.php" method='GET'>
                <div class='form'>
                    <p class='par'><label>Имя:</label></p>
                    <p class='par'><input type="text" name='name'></p>
                    <p class='par'><label>Фамилия:</label></p>
                    <p class='par'><input type="text" name='sname'></p>
                    <p class='par'><label>Эл. Почта:</label></p>
                    <p class='par'><input type="text" name='email'></p>
                    <p class='par'><input type="submit" name='subButton' value='Отправить'></p>
                </div>
            </form>
            <?php
                session_start();
                if(isset($_GET['subButton'])){
                    $uname=$_GET['name'];
                    $usname=$_GET['sname'];
                    $uemail=$_GET['email'];
                    $mysqli= new mysqli('localhost', 'root', '', 'WebSite');
                    if($mysqli->connect_errno){
                        echo 'ERROR';
                        exit;
                    }
                    $name='"' .$mysqli->real_escape_string($uname).'"';
                    $sname='"' .$mysqli->real_escape_string($usname).'"';
                    $email='"' .$mysqli->real_escape_string($uemail).'"';
                    if(strlen($uname)!=0 and strlen($usname)!=0 and strlen($uemail)){
                        $query="INSERT INTO Users (name, sname, email) VALUES ($name, $sname, $email)";
                        $result=$mysqli->query($query);
                        if($result){
                            echo '<p class="sucsess">Успешно!</p>';
                        }
                    }else{
                        echo '<p class="sucsess">Заполните все поля!</p>';
                    }
                    $mysqli->close();
                }
            ?>
        </div>
    </div>
</body>
</html>