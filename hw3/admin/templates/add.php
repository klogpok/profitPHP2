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
        <div class="myform">
            <form class="" method="post" action="./addArticle.php">
                <a href="./admin.php">To admin panel</a>
                <h3>Add new article</h3>
                Title:
                <div class="form-group my">
                    <textarea name="title" id="title" cols="30" rows="5"></textarea>
                </div>
                Lead:
                <div class="form-group">
                    <textarea name="lead" id="lead" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" name="do_save" class="btn btn-default">Add article</button>
                <br>
            </form>
        </div>
    </div>

</body>
</html>



