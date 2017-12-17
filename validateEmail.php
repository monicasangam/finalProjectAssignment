<html>
<head>
    <title><?php echo $firstName;?> <?php echo $lastName;?>s Profile</title>
    <style>
        body{
            background-color: lightpink;
            color: black;
        }
    </style>
</head>
<body>
<?php

if(isset($_GET['username']))
{
    $username = $_GET['username'];
    mysql_connect("sql1.njit.edu","ms792","bSzrOJUh") or die("Could not connect to the server");
    mysql_select_db("ms792") or die("That database is not found");
    $userQuery = mysql_query("SELECT * FROM user WHERE username='$username'");
//    if(mysql_num_rows($userQuery) != 1)
//    {
//        die("That username could not be found");
//    }
    while($row = mysql_fetch_array($userQuery,MYSQL_ASSOC))
    {
        $username = $row['username'];
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
        $email = $row['email'];
        $password = password_hash($row ['password'],PASSWORD_BCRYPT);


    }

?>
<h2><?php echo $firstName;?> <?php echo $lastName;?>s Profile</h2></br>
<table>
    <tr><td>Username:</td><td><?php echo $username?></td></tr>
    <tr><td>Firstname:</td><td><?php echo $firstName?></td></tr>
    <tr><td>Lastname:</td><td><?php echo $lastName?></td></tr>
    <tr><td>Email:</td><td><?php echo $email?></td></tr>
    <tr><td>Password:</td><td><?php echo $password?></td></tr>
</table>
<?php

}else die("You need to specify a username.");

?>
</body>
</html>
