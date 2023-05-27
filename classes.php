<?php

interface Table 
{
    public function createtbl(): string;

}

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "parrocha";

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
    }
    abstract public function db(): string;
}
class Dbname extends Database implements Table
{
    public function db(): string
    {
        $connect = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($connect);
    }
    public function createtbl(): string
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tbl(
            id int auto_increment primary key,
            first_name text,
            last_name text,
            middle_name text,
            age int
            )";
        return $this->conn->query($sql); 
    }
}

$test = new Dbname();
var_dump($test->db());
var_dump($test->createtbl());

?>