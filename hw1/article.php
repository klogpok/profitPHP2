<?php

require_once __DIR__.'/functions.php';

$articleId = (int)$_GET['id'];

$article = Article::findById($articleId);

include __DIR__ . '/templates/article.php';

