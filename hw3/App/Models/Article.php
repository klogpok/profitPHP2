<?php

namespace Models;

class Article extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

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

    /**
     * @property Author $author
     */
    public function __get($name)
    {

        if ('author' === $name) {

            if (null !== $this->author_id) {

                $sql = 'SELECT name FROM authors WHERE id = :id ';

                $db = \Db::instance();

                $res = $db->query($sql, Author::class , [':id' => $this->author_id]);

                if (false !== $res) {

                    return $res[0];
                }
            }
        }
    }
}