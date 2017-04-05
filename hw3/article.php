<?php

require_once __DIR__ . '/App/autoload.php';

$articleId = (int)$_GET['id'];

$article = \models\Article::findById($articleId);

include __DIR__ . '/templates/article.php';

