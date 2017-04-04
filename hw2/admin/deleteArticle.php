<?php

require_once __DIR__ . '/../App/autoload.php';

if (isset($_GET['delete'])) {

    \Models\Article::deleteItemById($_GET['delete']);
    header('Location: ./admin.php');
}