<?php

namespace Models;

abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE ;
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