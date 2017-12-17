<html>
<head>
    <title>Search for a User:</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: lightpink;
            color: black;
        }
    </style>
</head>
<body>
   <h2>Search for a User below</h2>
   <form action = "profile.php" method="get">
       <tr><td>Username:</td><td><input type="text" name="username" value="username"></td></tr>
       <tr><td><input type="submit" id="submit" name="submit" value="View Profile"></td></tr>
   </form>
</body>
</html>
