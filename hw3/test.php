<?php

require_once __DIR__ . '/App/autoload.php';


$article = \Models\Article::findById(1);

var_dump($article);

var_dump($article->author);