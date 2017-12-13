html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
  <div class="jumbotron">
    <form action="register.php" method="get">
        <label>First Name</label>
        <input type="text" name=fname value="fname">
        <br><br>
        <label>Last Name</label>
        <input type="text" name=lname value="lname">
        <br><br>
        <label>Email</label>
        <input type="text" name=email value="email">
        <br><br>
        <label>Phone</label>
        <input type="text" name=phone value="phone">
        <br><br>
        <label>Birthday</label>
        <input type="text" name=birthday value="birthday">
        <br><br>
        <label>Gender</label>
        <input type="text" name=gender value="gender">
        <br><br>
        <label>Password</label>
        <input type="password" name="password" value="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
