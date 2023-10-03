<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    form{
        margin: auto;
        width: 30%;
    }
    .content{
        display: block;
        width: 50%;
        margin: auto;
    }
    .docs img{
        width: 100%;
        margin: 5px;
    }

    .aaa{
        width: 95%;

    }
</style>
<body>
    <img src="../pic/header_photo.png" alt="Header" class='HF'>
    <div class="wrapper">
        <div class='left'>
            <ul class='products'>
                <li><a href="Bikes.php">Велосипеды</a></li>
                <ul>
                    <li><a href="MTB.php">Горные</a></li>
                    <li><a href="Town.php">Городские</a></li>
                    <li><a href="Road.php">Шоссейные</a></li>
                    <li><a href="Fat.php">Фэтбайки</a></li>
                </ul>
                <li><a href="../stuff.php">Запчасти</a></li>
                <li><a href="../acc.php">Аксессуары</a></li>
                <li><a href="../html.php">Главная</a></li>
            </ul>
            <a href="Basket.php"><img src="../pic/basket-shopping-solid.png" alt="Basket" width='30%' class='bask'></a>
        </div>
        <div class='content'>
            <?php
                session_start();
                    $conn= new mysqli('localhost', 'root', '', 'WebSite');
                    if($mysqli->connect_errno){
                        echo 'ERROR';
                        exit;
                    }
                    $sql = "SELECT * FROM MTB";
                    echo '<div class="docs">';
                    if($result = $conn->query($sql)){
                        foreach($result as $row){
                            $id=$row["ID"];
                            $img = $row["img"];
                            $name = $row["name"];
                            $price=$row["price"];
                            echo '<div class="b1">';
                            echo '<p class="aaa"><img src="'.$img.'" alt="Photo" class="photo serv rad"></p>', '<br>', $name, '<br>', $price, '<br>';
                            echo '<input type="submit" name="'.$id.'" value="В корзину">';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                    /*for($i=1; $i<5; $i+=1){
                        if(isset($_GET['$i'])){
                            $sql = "SELECT * FROM MTB WHERE ID=$i";
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
                            $query="INSERT INTO Users (name, sname, email) VALUES ($name, $sname, $email)";
                            $result=$mysqli->query($query);
                            if($result){
                                echo 'Успешно!';
                            }else{
                                echo 1;
                            }
                            $mysqli->close();
                        }
                    }
                    $conn->close();*/
            ?>
        </div>
    </div>
</body>
</html>