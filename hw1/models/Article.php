<?php

class Article
    extends Model
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
}