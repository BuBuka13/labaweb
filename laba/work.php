<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с БД</title>
    <meta name="description" content="Работа с базой данных"/>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="css/style.css">
</head>
<?php
require_once 'header.php';
require_once 'h1_3.php'
?>

<body>
<div class="header-content">
    <main>
        <h2>Вывод данных из бд и удаление</h2>



        <?php
        $db_server = 'localhost';
        $db_user = 'root';
        $db_password = 'boltik4704QlramS_t';
        $db_name = 'test';

        $db = new mysqli($db_server, $db_user, $db_password, $db_name);
        if ($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $sql = "SELECT * FROM usera";
        if($result = $db->query($sql)){
            $rowsCount = $result->num_rows; // количество полученных строк
            echo "<p>Получено объектов: $rowsCount</p>";
            echo "<table  border='1' cellpadding='0' cellspacing='0' ><tr><th>Id</th><th>Имя</th><th>Специальность</th><th>Хобби</th><th>Delete</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["spec"] . "</td>";
                echo "<td>" . $row["hobbi"] . "</td>";
                echo "<td>
           <form action='delete.php' method='post'>
           <input type='hidden' name='id' value='" . $row["id"] . "' />
                <button class='btn'>Удалить</button>
                </form>
               </td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $db->error;
        }

        ?>
        <form action = "bd.php" target>
            <p> <button>Перейти к форме</button> </p>
        </form>
        <hr>



        <h2>Сортировка</h2>

        <?php
        /* Все варианты сортировки */
        $sort_list = array(
            'date_asc'   => '`id`',
            'date_desc'  => '`id` DESC',
            'hotel_asc'  => '`name`',
            'hotel_desc' => '`name` DESC',
            'city_asc'   => '`spec`',
            'city_desc'  => '`spec` DESC',
            'h_asc'   => '`hobbi`',
            'h_desc'  => '`hobbi` DESC',

        );


        $sort = @$_GET['sort'];
        if (array_key_exists($sort, $sort_list)) {
            $sort_sql = $sort_list[$sort];
        } else {
            $sort_sql = reset($sort_list);
        }

        /* Запрос в БД через PDO*/
        $dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'boltik4704QlramS_t');
        $sth = $dbh->prepare("SELECT * FROM `usera` ORDER BY {$sort_sql}");
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);

        /* Функция вывода ссылок */
        function sort_link_bar($title, $a, $b) {
            $sort = @$_GET['sort'];

            if ($sort == $a) {
                return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>↑</i></a>';
            } elseif ($sort == $b) {
                return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>↓</i></a>';
            } else {
                return '<a href="?sort=' . $a . '">' . $title . '</a>';
            }
        }
        ?>
        <div class="sort-bar">
            <div class="sort-bar-title">Сортировать по:</div>
            <div class="sort-bar-list">
                <?php echo sort_link_bar('id', 'date_asc', 'date_desc'); ?>
                <?php echo sort_link_bar('Имя', 'hotel_asc', 'hotel_desc'); ?>
                <?php echo sort_link_bar('Специальность', 'city_asc', 'city_desc'); ?>
                <?php echo sort_link_bar('Хобби', 'h_asc', 'h_desc'); ?>


            </div>
        </div>
        <p></p>

        <table  border='1' cellpadding='0' cellspacing='0'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Специальность</th>
                <th>Хобби</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['spec']; ?></td>
                    <td><?php echo $row['hobbi']; ?></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <hr>


        <h2>JOIN запрос</h2>
        <h3>Объединяем таблицы по id</h3>
        <?php


        $sqll = "SELECT * FROM usera INNER JOIN hobbi using(id)";
        if($result = $db->query($sqll)){
            $rowsCount = $result->num_rows; // количество полученных строк
            echo "<p>Получено объектов: $rowsCount</p>";
            echo "<table border='1' cellpadding='0' cellspacing='0'><tr><th>Id</th><th>Имя</th><th>Специальность</th><th>Хобби</th><th>Комментарий</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["spec"] . "</td>";
                echo "<td>" . $row["hobbi"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $db->error;
        }



        $db->close();
        ?>


    </main>

</div>

<?php
require_once 'footer.php'
?>
</body>
</html>



