<?php

class Config
{
    use Singleton;

    public $data;

    protected function __construct()
    {
        return $this->data['db'] = parse_ini_file(__DIR__.'/config/config.ini');
    }
}