<?php

require_once __DIR__ . '/App/autoload.php';

const ROOT = __DIR__;

$articles = \models\Article::getFewItems('DESC', 3);

include __DIR__.'/templates/index.php';