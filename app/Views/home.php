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
        <div class="products">
            <a href="/"><h1 class="jumbotron text-center">Citrus Catalog</h1></a>
            <div class="row">
                <?php
                foreach ($this->products as $product) {
                    ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $product->image; ?>" alt="<?php echo $product->title; ?>" width="200px" height="200px">
                        <h4><?php echo $product->title; ?></h4>
                        <p><?php echo $product->description; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="comments">
            <div class="comments-list">
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active">
                        Comments
                    </p>
                    <?php
                    if (count($this->comments) > 0) {
                        foreach ($this->comments as $comment) {
                            ?>
                            <p class="list-group-item">
                                <?php echo $comment->comment; ?>
                                <br>
                                <small>Comment posted by: <strong><?php echo $comment->name ?></strong>, <strong><?php echo $comment->email; ?></strong></small>
                            </p>
                            <?php
                        }
                    } else {
                        ?>
                        <p class="list-group-item">
                            No Comments has been made yet.
                        </p>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="comment-form">
                <h6>Post Your Comment</h6>
                <form action="/comment" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                        <small id="nameHelp" class="form-text text-muted">Enter Your Name</small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">Enter Your E-Mail</small>
                    </div>
                    <div class="form-group">
                        <textarea id="comment" name="comment" class="form-control" aria-describedby="messageHelp" required></textarea>
                        <small id="messageHelp" class="form-text text-muted">Enter Your Comment</small>
                    </div>
                    <input class="btn btn-primary" name="btn_submit" type="submit" value="Post Comment">
                </form>
            </div>
        </div>
    </div>
</body>
</html>