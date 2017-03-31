<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function query($sql, string $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false === $res) {
            return false;
        } else {
            $data = $sth->fetchAll(PDO::FETCH_CLASS, $class);
            return $data;
        }
    }

    public function execute(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if(false === $res) {
            return false;
        } else {
            return true;
        }
    }
}