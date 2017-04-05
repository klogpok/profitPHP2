<div id="wrapper">
    <form class="" method="post" action="./updateArticle.php">
        <h3>Edit article</h3>
        Title:
        <br>
        <div class="form-group my">
            <textarea name="title" id="title" cols="60" rows="5"><?php echo $article->getTitle(); ?></textarea>
        </div>
        Lead:
        <br>
        <div class="form-group">
            <textarea name="lead" id="lead" cols="60" rows="10"><?php echo $article->getLead(); ?></textarea>
        </div>
        <button type="submit" name="do_edit" value="" class="btn btn-default">Edit article</button>
        <input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
        <br>
    </form>
</div>