<?php

require_once __DIR__ . '/App/autoload.php';

$template = __DIR__.'/templates/article.php';

$articleId = (int)$_GET['id'];

$article = \models\Article::findById($articleId);

$view = new \Models\View;

$view->article = $article;

$view->display($template);
