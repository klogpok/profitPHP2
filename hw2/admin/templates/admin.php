<div id="wrapper">
    <h1>Albums</h1>
    <a href="/../../index.php">To home page</a>
    <br>
    <table class="tbl1">
        <tr>
            <th>Article ID</th>
            <th>Title</th>
            <th>Lead</th>
            <th></th>
        </tr>

        <?php foreach ($articles as $article) : ?>

            <tr>
                <td><?php echo $article->getId(); ?></td>
                <td><?php echo $article->getTitle(); ?></td>
                <td>
                    <a href="./../updateArticle.php?update=<?php echo $article->getId(); ?>">Edit</a>
                    <a href="../deleteArticle.php?delete=<?php echo $article->getId(); ?>">Delete</a>
                </td>
            </tr>

        <? endforeach; ?>
    </table>
    Add new article:
    <hr>
    <div class="myform">
        <form class="" method="post" action="../updateArticle.php">

            <div class="form-group my">
                <label class="sr-only" for="albumName">Album name</label>
                <input type="text" name="albumName" class="form-control" id="albumName" placeholder="Album">
            </div>

            <div class="form-group">
                <label class="sr-only" for="year">Year</label>
                <input type="number" name="year" class="form-control" id="year" placeholder="Year">
            </div>

            <div class="form-group">
                <label class="sr-only" for="albumName">Label</label>
                <input type="text" name="label" class="form-control" id="label" placeholder="Label">
            </div>

            <div class="form-group">
                <label class="sr-only" for="desc">Description</label>
                <textarea name="desc" id="desc" cols="40" rows="10" placeholder="Description"></textarea>
            </div>

            <div class="form-group">
                <label class="sr-only" for="filename">File name</label>
                <input type="text" name="filename" class="form-control" id="filename" placeholder="File name">
            </div>

            <button type="submit" name="do_save" class="btn btn-default">Save</button>
        </form>

    </div>
</div>