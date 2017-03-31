<?php

require_once __DIR__ . '/protected/autoload.php';

$articles = \models\Article::getFewArticles('DESC', 3);

include __DIR__.'/templates/index.php';