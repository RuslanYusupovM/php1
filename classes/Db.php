<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        require_once __DIR__ . '/../config.php';

        $dsn = 'mysql:host=' . HOST . ';dbname=' . DB_NAME . ';';

        $this->dbh = new PDO($dsn, DB_USER, DB_PASSWORD);
    }
}