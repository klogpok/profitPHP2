<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div id="wrapper">
    <br>

    <?php foreach($articles as $article) : ?>

        <div class="note">
            <p class="topic">
                <a href="./article.php?id=<?php echo $article->getId(); ?>"><?php echo $article->getTitle(); ?></a>
            </p>
            <p class="">
                <?php echo $article->getLead(); ?>
            </p>
            <br>
            <hr>
        </div>

    <?php endforeach; ?>
</div>

</body>
</html>


