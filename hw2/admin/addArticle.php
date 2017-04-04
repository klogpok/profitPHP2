<?php

require_once __DIR__ . '/../App/autoload.php';

if (isset($_POST['do_save'])) {

    $article = new \Models\Article();

    if (empty($_POST['title']) && empty($_POST['lead'])) {

        header('Location: ./admin.php');
    } else {

        if (!empty($_POST['title'])) {

            $article->title = $_POST['title'];
        }

        if (!empty($_POST['lead'])) {

            $article->lead = $_POST['lead'];
        }

        $article->save();
        header('Location: ./admin.php');
    }
}

include __DIR__ . '/templates/components/header.php';

include __DIR__ . '/templates/add.php';

include __DIR__ . '/templates/components/footer.php';
