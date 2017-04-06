<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin</title>
</head>
<body>

    <div id="wrapper">
        <h1>Admin panel</h1>
        <a href="./../index.php">To home page</a>
        <a href="./addArticle.php">Add new article</a>
        <br>
        <table class="tbl1">
            <tr>
                <th>Article ID</th>
                <th>Title</th>
                <th>Author</th>
                <th></th>
            </tr>

            <?php foreach ($this->articles as $article) : ?>

                <tr>
                    <td><?php echo $article->getId(); ?></td>
                    <td><?php echo $article->getTitle(); ?></td>
                    <td><?php echo $article->author->name; ?></td>

                    <td>
                        <a href="./updateArticle.php?update=<?php echo $article->getId(); ?>">Edit</a>
                        <a href="./deleteArticle.php?delete=<?php echo $article->getId(); ?>">Delete</a>
                    </td>
                </tr>

            <? endforeach; ?>
        </table>
    </div>
</body>
</html>