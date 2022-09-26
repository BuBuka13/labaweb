<?php
//include 'work.php';
class CDateBase{
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_password = "boltik4704QlramS_t";
    private $db_name = "test";
    private $db = null;

    public function DBConnect(){
        if (!$this->db){
            $db = new mysqli($this->db_server, $this->db_user, $this->db_password, $this->db_name);
            if ($db->connect_error){
                die("Connection failed: " . $db->connect_error);
            }
            $this->db = $db;
        }

    }

    public function selectALL($tablename = null, $id = null, $colName = null, $sortType = 'ASC'){
        if(!$tablename){
            echo 'write the name of table';
            return false;
        }
        $this->DBConnect();
        $sql = ' SELECT * FROM ' . $tablename;
        if($id){
            $sql .=' WHERE id = ' . $id;
        }

        if($colName){
            $sql .=' ORDER BY ' . $tablename . ' ' . $colName. ' ' . $sortType ;
        }


        $obj = $this->db->query($sql);
        while ($row = $obj->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }


}
