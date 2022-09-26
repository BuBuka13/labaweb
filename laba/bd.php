<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Укажи свое хобби</title>
    <meta name="description" content="Заполнение формы"/>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="css/style.css">
</head>



<?php
require_once 'header.php';
require_once 'h1_1.php';

?>
<body>
<div class="navi">
<main>
    <h2 class="names">Заполните форму</h2>
    <div class="form">
    <form action="new.php" method="post">

        <p>Ваше имя:<span>*</span>  <input type="text" name = "nam" style="width: 400px" required ></p>
        <p>Ваша специальность:<span>*</span> <input type="text" name = "speci" style="width: 400px" required></p>
        <p class="names">Ваше хобби: </p>

        <a>Спорт: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="плавание">
            <label for="a">Плавание</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="баскетбол">
            <label for="b">Баскетбол</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="йога">
            <label for="c">Йога</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="фитнес">
            <label for="d">Фитнес</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="танцы">
            <label for="e">Танцы</label>
        </div>

        <a style="margin-left: 80px">Программирование: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Веб-программирование">
            <label for="a">Веб-программирование</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="ООП">
            <label for="b">ООП</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Аналитика">
            <label for="c">Аналитика</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Разработка игр">
            <label for="d">Разработка игр</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Системное программирование">
            <label for="e">Системное программирование</label><br>

        </div>
        <a style="margin-left: 80px">Наука: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Химия">
            <label for="a">Химия</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="физика">
            <label for="b">Физика</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Математика">
            <label for="c">Математика</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Биология">
            <label for="d">Биология</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Философия">
            <label for="e">Философия</label><br>

        </div>
        <p></p>
        <a>Кулинария: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Приготовление десертов">
            <label for="a">Десерты</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="Приготовление выпечки">
            <label for="b">Выпечка</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Приготовление блюд">
            <label for="c">Блюда</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Приготовление экз.блюд">
            <label for="d">Экзотические блюда</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Приготовление напитков">
            <label for="e">Напитки</label><br>

        </div>


        <a style="margin-left: 200px">Творчество: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Рукоделие">
            <label for="a">Рукоделие</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="Рисование">
            <label for="b">Рисование</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Музыка">
            <label for="c">Музыка</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Фотография/видео">
            <label for="d">Фотография/видео</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Писательство">
            <label for="e">Писательство</label><br>

        </div>
        <p></p>

        <a >Коллекционирование: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Марки">
            <label for="a">Марки</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="Минеральные камни">
            <label for="b">Минеральные камни</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Журналы">
            <label for="c">Журналы</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Значки">
            <label for="d">Значки</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Магниты">
            <label for="e">Магниты</label><br>
        </div>
        <a style="margin-left: 160px">Блог: </a>
        <div style="display: inline-block; vertical-align: top;">
            <input type="checkbox" id="a" name="h_genre[]" value="Тик-Ток">
            <label for="a">Тик-ток</label><br>
            <input type="checkbox" id="b" name="h_genre[]" value="Инстаграм">
            <label for="b">Блоггер в Инстаграм</label><br>
            <input type="checkbox" id="c" name="h_genre[]" value="Youtube">
            <label for="c">Видеоблоггер на Youtube</label><br>
            <input type="checkbox" id="d" name="h_genre[]" value="Трэвэл блог">
            <label for="d">Трэвэл блог</label><br>
            <input type="checkbox" id="e" name="h_genre[]" value="Фуд блог">
            <label for="e">Фуд блогер</label><br>
        </div>


        <p class="tell">Рассскажите подробнее о ваших увлечениях</p>
        <textarea name="hob" cols="50" rows="5" maxlength="300"></textarea>
        <br>
        <button class="btn">Добавить новую запись</button>
    </div>
    </form>



    <div class="button">
    <form action = "work.php">
        <p> <button>Перейти к работе с бд</button> </p>
    </form>
    </div>
</main>

</div>

<?php
require_once 'footer.php'
?>
</body>

</html>


