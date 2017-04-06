<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div id="wrapper">
    <a href="./Admin/admin.php">Admin panel</a>
    <br>

    <?php foreach($this->articles as $article) : ?>

        <div class="note">
            <p class="topic">
                <a href="./article.php?id=<?php echo $article->getId(); ?>"><?php echo $article->getTitle(); ?></a>
            </p>
            <p class="">
                <?php echo $article->getLead(); ?>
            </p>
            <p class="">
                <?php echo $article->author->name; ?>
            </p>
            <br>
            <hr>
        </div>

    <?php endforeach; ?>
</div>

</body>
</html>


