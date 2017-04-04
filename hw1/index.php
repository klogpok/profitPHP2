<?php

require_once __DIR__.'/functions.php';

$articles = Article::findAll();

include __DIR__.'/templates/index.php';