<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citrus Catalog</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="dashboard">
        <a href="/"><h1 class="jumbotron text-center">Dashboard</h1></a>
        <form action="/logout" method="post" class="logout">
            <input class="btn btn-primary" type="submit" name="btn_submit3" value="Logout">
        </form>
        <?php
        if (count($this->comments) > 0) {
            foreach ($this->comments as $comment) {
                ?>
                <p class="list-group-item">
                    <?php echo $comment->comment; ?>
                    <br>
                    <small>Comment posted by: <strong><?php echo $comment->name ?></strong>, <strong><?php echo $comment->email; ?></strong></small>
                    <form action="/publish" method="post">
                        <input type="hidden" name="commentId" value="<?php echo $comment->id; ?>">
                        <input type="submit" name="btn_submit4" value="Publish comment" class="btn btn-primary">
                    </form>
                </p>
                <?php
            }
        } else {
            ?>
            <p class="list-group-item">
                All comments are published.
            </p>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>