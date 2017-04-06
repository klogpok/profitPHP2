<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/hw2/admin/css/admin.css">
    <title>Admin</title>
</head>
<body>

    <div id="wrapper">
        <form class="" method="post" action="./updateArticle.php">
            <a href="./admin.php">To admin panel</a>
            <h3>Edit article</h3>
            Title:
            <br>
            <div class="form-group my">
                <textarea name="title" id="title" cols="60" rows="5"><?php echo $this->article->getTitle(); ?></textarea>
            </div>
            Lead:
            <br>
            <div class="form-group">
                <textarea name="lead" id="lead" cols="60" rows="10"><?php echo $this->article->getLead(); ?></textarea>
            </div>
            <button type="submit" name="do_edit" value="" class="btn btn-default">Edit article</button>
            <input type="hidden" name="id" value="<?php echo $this->article->getId(); ?>">
            <br>
        </form>
    </div>

</body>
</html>