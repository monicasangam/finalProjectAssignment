<html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <title>Registeration</title>
     <h1>Register Users</h1>
     <style>
         body{
             background-color: lightpink;
             color: black;
         }
     </style>
 </head>
 <form action="inserted.php" method="post">
<body>
<div>
    <font size="5">
        <b>First Name: </b><input type="text" name="fname"><br><br>
        <b>Last Name: </b><input type="text" name="lname"><br><br>
        <b>Email Address: </b><input type="text" name="email"><br><br>
        <b>Phone:</b><input type="text" name="phone"><br><br>
        <b>Birthday:</b><input type="text" name="birthday"><br><br>
        <b>Gender:</b><input type="text" name="gender"><br><br>
        <b>Password:</b><input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Add">
    </font>
</div>
</body>
</html>
