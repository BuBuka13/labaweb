<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "boltik4704QlramS_t";
$db_name = "test";
$charset 	= "utf8";


    $db = new mysqli($db_server, $db_user, $db_password, $db_name);
    if ($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }



        if(isset($_POST["id"]))
        {

            $userid = $db->real_escape_string($_POST["id"]);

            $sql = "DELETE FROM usera WHERE id = '$userid'";
            $sqll = "DELETE FROM hobbi WHERE id = '$userid'";

            if($db->query($sql)){

                header("Location: work.php");
            }
            else{
                echo "Ошибка: " . $db->error;
            }
            if($db->query($sqll)){

                header("Location: work.php");
            }
            else{
                echo "Ошибка: " . $db->error;
            }
            $sql = "ALTER TABLE usera AUTO_INCREMENT = '$userid'";
            $db->close();
        }

















