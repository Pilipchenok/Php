<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>В наш магазин пока ещё ничего не привезли, но вы можете оставить заявку:</p>
    <form action="Bikes.php" method='GET'>
        <label>Имя:</label><br>
        <input type="text" name='name'><br>
        <label>Фамилия:</label><br>
        <input type="text" name='sname'><br>
        <label>Эл. Почта:</label><br>
        <input type="text" name='email'><br>
        <input type="submit" name='subButton' value='Отправить'>
    </form>
    <?php
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
            $query="INSERT INTO Users (name, sname, email) VALUES ($name, $sname, $email)";
            $result=$mysqli->query($query);
            if($result){
                echo 'Успешно!';
            }
            $mysqli->close();
        }
    ?>
</body>
</html>