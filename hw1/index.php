<?php

require_once __DIR__.'/functions.php';

$cause = ' ORDER BY id DESC LIMIT 3';

$articles = Article::findAll($cause);

include __DIR__.'/templates/index.php';