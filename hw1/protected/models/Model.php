<?php

namespace Models;

abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
<<<<<<< HEAD:hw1/models/Model.php
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE;
=======
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE ;
>>>>>>> fc81c09a0a775bcda93b05bc3120c0081e27dbae:hw1/protected/models/Model.php
        return $db->query($sql, static::class);
    }

    public static function findById(int $id) {

        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, static::class, [':id' => $id]);

        if (false === $res) {
            return false;
        } else {
            return $res[0];
        }
    }
}