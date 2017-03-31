<?php

require_once __DIR__ . '/App/autoload.php';

$articles = \models\Article::getFewArticles('DESC', 3);

include __DIR__.'/templates/index.php';