<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новость</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<div id="wrapper">
    <p>
        <a href="./index.php">Вернуться на главную</a>
    </p>
    <p class="topic"><?php echo $article->getTitle();?></p>
    <br>
    <p class=""><?php echo $article->getLead();?></p>
    <br>
</div>
</body>
</html>


