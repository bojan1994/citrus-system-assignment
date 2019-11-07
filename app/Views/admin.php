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
    <div class="admin">
        <a href="/"><h1 class="jumbotron text-center">Admin panel</h1></a>
        <form action="/login" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
                <small id="usernameHelp" class="form-text text-muted">Username</small>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" required>
                <small id="passwordHelp" class="form-text text-muted">Password</small>
            </div>
            <input class="btn btn-primary" name="btn_submit2" type="submit" value="Login">
        </form>
    </div>
</div>
</body>
</html>