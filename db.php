<?php
class Database
{
    public $conn;
    public $dbname = "test";

    public function connect()
    {
        $this->conn = new mysqli("localhost", "root","");
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $this->conn = new mysqli("localhost", "root","",$this->dbname);
    }

    public function sql($sql)
    {
        return $this->conn->query($sql);
    }
}

?>