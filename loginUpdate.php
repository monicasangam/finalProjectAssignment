<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="jumbotron">
    <form method="post" action="authenticate.php">
        <h1>User Login</h1>
        <label>Username</label>
        <input type="text" name="username" value="username"></br>
        <br>
        <label>Password</label>
        <input type="password" name="password" value="password"></br>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    </body>
</html>
