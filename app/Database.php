<?php

/**
 * User: MediaOne (Aleksand Kuchinskiy)
 * Date: 16.08.2016
 * Time: 9:32
 */
class Database
{
    private $user;
    private $host;
    private $database;
    private $pass;
    private $charset;
    private $dsn;
    private $opt;
    private $pdo;

    public function __construct()
    {
        $this->user = 'root';
        $this->host = 'localhost';
        $this->database = 'magaz-xiaomi';
        $this->pass = '';
        $this->charset = 'UTF8';

        $this->dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";

        $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
    }

    public function get_all_items($query) {
        $tmp = $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $tmp;
    }
}