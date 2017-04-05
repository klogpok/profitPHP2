<?php

require_once __DIR__ . '/App/autoload.php';

$template = __DIR__.'/templates/index.php';

$articles = \models\Article::getFewItems('DESC', 3);

$view = new \Models\View;

$view->articles = $articles;

$view->display($template);