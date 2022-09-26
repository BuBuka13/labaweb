<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "boltik4704QlramS_t";
$db_name = "test";
$charset 	= "utf8";
try {

    $db = new mysqli($db_server, $db_user, $db_password, $db_name);
    if ($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}


    $name=$_POST['nam'];
    $spec=$_POST['speci'];
    $hob = $_POST['hob'];
// Переносим данные (отмеченные жанры) из полей формы в массив
    $h_genres = array();

    if(!empty($_POST['h_genre'])){
        foreach($_POST['h_genre'] as $genre_selected){
            $h_genres[] = $genre_selected;
        }
    }
    $sql = "INSERT INTO usera(id, name, spec, hobbi) VALUES(NULL, '$name','$spec', '" . implode(', ', $h_genres) . "')";
    $sqll = "INSERT INTO hobbi(id, category) VALUES((SELECT MAX(id) FROM usera), '$hob')";


    if ($db->query($sql) === TRUE) {
        header("Location: bd.php");

    }
    else {
    echo "Error: " . $sql . "<br>" . $db->error;
    }

if ($db->query($sqll) === TRUE) {
    header("Location: bd.php");

}
else {
    echo "Error: " . $sqll . "<br>" . $db->error;
}















