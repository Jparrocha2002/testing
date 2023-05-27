<?php
class Dbname
{
    public function connect()
    {
        public $conn;
        public $dbname = "test";

        $this->conn = new mysqli("localhost", "root","");
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $this->conn->query("localhost", "root","",$this->dbname);
    }
}

?>