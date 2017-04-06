<?php

require_once __DIR__ . '/protected/autoload.php';

<<<<<<< HEAD
$articles = Article::findAll();
=======
$articles = \models\Article::getFewArticles('DESC', 3);
>>>>>>> fc81c09a0a775bcda93b05bc3120c0081e27dbae

include __DIR__.'/templates/index.php';