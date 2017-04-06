<?php

require_once __DIR__ . '/../App/autoload.php';

if (isset($_POST['do_edit'])) {

    if (isset($_POST['id']) && 0 != $_POST['id']) {

        $article = \Models\Article::findById($_POST['id']);

        $article->title = $_POST['title'];
        $article->lead = $_POST['lead'];

        $article->save();

        header('Location: ./admin.php');
    }
}

if (!isset($_GET['update'])) {

    header('Location: ./admin.php');
} else {

    $article = \Models\Article::findById($_GET['update']);

    if (false === $article) {

        header('Location: ./admin.php');
    } else {

        $view = new \Models\View;
        $view->article = $article;
        $view->display(__DIR__.'/templates/update.php');
    }
}



