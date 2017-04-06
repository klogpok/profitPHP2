<?php

require_once __DIR__ . '/../App/autoload.php';

$template = __DIR__.'/templates/admin.php';

$articles = \models\Article::findAll();

$view = new \Models\View;

$view->articles = $articles;

$view->display($template);