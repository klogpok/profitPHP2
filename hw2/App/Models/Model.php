<?php

namespace Models;

abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = \Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE ;
        return $db->query($sql, static::class);
    }

    public static function findById(int $id) {

        $db = \Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, static::class, [':id' => $id]);

        if (false === $res) {
            return false;
        } else {
            return $res[0];
        }
    }

    public static function getFewItems($sort = 'ASC', $limit = 0) {

        $db = \Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id ' . $sort . ' LIMIT ' . $limit;

        return $db->query($sql, static::class);
    }

    public static function deleteItemById(int $id) {

        $db = \Db::instance();
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->execute($sql, [':id' => $id]);

        if (false === $res) {
            return false;
        } else {
            return true;
        }
    }

    public function insert() {

        $columns = [];
        $params  = [];
        $data    = [];

        foreach ($this as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $columns[] = $name;
            $params[]  = ':' . $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ',$columns) . ') 
                    VALUES ('
                                . implode(', ',$params) .
                            ')';

        $db = \Db::instance();
        return $db->execute($sql, $data);
    }

    public function update() {

        $params  = [];
        $data    = [];

        foreach ($this as $name => $value) {

            $params[]  = $name .' = :' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ',$params).
                        ' WHERE id = :id';

        $db = \Db::instance();
        return $db->execute($sql, $data);
    }

    public function save() {

        if (null === $this->id) {

            return $this->insert();

        } else {

            return $this->update();
        }
    }
}