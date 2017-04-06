<?php

require_once __DIR__ . '/../autoload.php';

error_reporting(E_ALL);

$db = new Db;

assert(true == ($db->execute('SELECT * FROM sometable WHERE id= : id', [':id' => 12])));




