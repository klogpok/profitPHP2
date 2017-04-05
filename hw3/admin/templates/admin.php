<div id="wrapper">
    <h1>Admin panel</h1>
    <a href="./../index.php">To home page</a>
    <a href="./addArticle.php">Add new article</a>
    <br>
    <table class="tbl1">
        <tr>
            <th>Article ID</th>
            <th>Title</th>
            <th></th>
        </tr>

        <?php foreach ($articles as $article) : ?>

            <tr>
                <td><?php echo $article->getId(); ?></td>
                <td><?php echo $article->getTitle(); ?></td>
                <td>
                    <a href="./updateArticle.php?update=<?php echo $article->getId(); ?>">Edit</a>
                    <a href="./deleteArticle.php?delete=<?php echo $article->getId(); ?>">Delete</a>
                </td>
            </tr>

        <? endforeach; ?>
    </table>
</div>