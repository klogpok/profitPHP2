<?php

class Config
{
    public $data;

    public function __construct()
    {
        $this->data['db'] = parse_ini_file(__DIR__.'/config/config.ini');
    }
}