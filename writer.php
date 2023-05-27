<?php
include "novel.php";

class Writer extends Novel
{
    public $tbl = "writer";

    public function createtbl()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tbl(
            id int primary key auto_increment,
            first_name text,
            last_name text,
            middle_name text,
            birthdate varchar(20)
            )";
            $this->connect();
            var_dump($this->sql($sql));
    }
}
$check = new Writer();
$check->createtbl();

?>