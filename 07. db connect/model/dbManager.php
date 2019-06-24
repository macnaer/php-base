<?php

require_once "./controller/config.php";

class DBManager
{
    private $mysqli;

    public function __construct()
    {
       $this->mysqli = new mysqli(HOST, USER, PASS, DBNAME) or die("Unable to connect");
       $this->mysqli->query("SET NAMES 'utf8'");
    }

    public function CheckUser($email, $pass){
        $result = mysqli_query($this->mysqli, "SELECT * FROM `users` WHERE `email` = '$email';");
        return $result;
    }

    public function __destruct()
    {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }
}
