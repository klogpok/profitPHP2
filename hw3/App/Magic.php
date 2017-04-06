<?php

trait Magic
{
    protected $data;

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
        if (isset($this->$name)) {

            return true;
        } else {

            return false;
        }
    }
}