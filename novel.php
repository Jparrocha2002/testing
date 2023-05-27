<?php
include "db.php";

class Novel extends Database
{
    public $tbl = "novel";

    public function createTbl()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tbl(
            id int auto_increment primary key,
            title text,
            status text,
            release_date text,
            description text
            )";
        $this->connect();
        $this->sql($sql);

    }
}
$check = new Novel();
$check->createTbl();
?>