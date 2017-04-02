<?php

class Db
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $configs = \Config::instance();
        $this->dbh = new \PDO('mysql:host='.$configs->data['db']['host'].';dbname='.$configs->data['db']['db_name'],
            $configs->data['db']['user'], $configs->data['db']['password']);
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