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
            <p class='headd'>Запись на услугу</p>
            <p>Оставьте завку на доставку велосипеда</p>
            <form action="deliv.php" method='GET'>
                <p class='par'><label>Имя:</label></p>
                <p class='par'><input type="text" name='name'></p>
                <p class='par'><label>Фамилия:</label></p>
                <p class='par'><input type="text" name='sname'></p>
                <p class='par'><label>Эл. Почта:</label></p>
                <p class='par'><input type="text" name='email'></p>
                <p class='par'><label>Страна:</label></p>
                <p class='par'><input type="text" name='country'></p>
                <p class='par'><label>Город:</label></p>
                <p class='par'><input type="text" name='city'></p>
                <p class='par'><input type="submit" name='subButton' value='Отправить'></p>
            </form>
            <?php
                if(isset($_GET['subButton'])){
                    $uname=$_GET['name'];
                    $usname=$_GET['sname'];
                    $uemail=$_GET['email'];
                    $ucountry=$_GET['country'];
                    $ucity=$_GET['city'];
                    $mysqli= new mysqli('localhost', 'root', '', 'WebSite');
                    if($mysqli->connect_errno){
                        echo 'ERROR';
                        exit;
                    }
                    $name='"' .$mysqli->real_escape_string($uname).'"';
                    $sname='"' .$mysqli->real_escape_string($usname).'"';
                    $email='"' .$mysqli->real_escape_string($uemail).'"';
                    $country='"' .$mysqli->real_escape_string($ucountry).'"';
                    $city='"' .$mysqli->real_escape_string($ucity).'"';
                    if(strlen($uname)!=0 and strlen($usname)!=0 and strlen($uemail)!=0 and strlen($ucountry)!=0 and strlen($ucity)!=0){
                        $query="INSERT INTO Delivery (name, sname, email, country, city) VALUES ($name, $sname, $email, $country, $city)";
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