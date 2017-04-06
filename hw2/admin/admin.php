<?php

require_once __DIR__ . '/../App/autoload.php';

$articles = \models\Article::findAll();

include __DIR__ . '/templates/components/header.php';

include __DIR__ . '/templates/admin.php';

include __DIR__ . '/templates/components/footer.php';