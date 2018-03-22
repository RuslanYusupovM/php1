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


    public function execute(string $sql)
    {

        $sth = $this->dbh->prepare($sql);

        return $sth->execute();

    }


    public function query(string $sql, array $data)
    {

        $sth = $this->dbh->prepare($sql);

        foreach ($data as $param => $value) {

            $sth->bindParam($param, $value);

        }

        return $sth->execute() ? $sth->fetchAll() : false;

    }

}