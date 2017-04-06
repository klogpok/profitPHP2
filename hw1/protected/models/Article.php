<?php

namespace Models;

class Article extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLead()
    {
        return $this->lead;
    }

    public static function getFewArticles($sort = 'ASC', $limit = 0) {

        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id ' . $sort . ' LIMIT ' . $limit;
        return $db->query($sql, static::class);
    }
}