<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('header.php');
?>
<h1>Create a New Task</h1>
<form method="get" action="displayTask.php">
    <label>OwnerEmail</label>
    <input type="text" name="ownerEmail" value="ownerEmail">
    <br><br>
    <label>OwnerId</label>
    <input type="text" name="ownerId" value="ownerId">
    <br><br>
    <label>CreatedDate</label>
    <input type="text" name="createdDate" value="createdDate">
    <br><br>
    <label>DueDate</label>
    <input type="text" name="dueDate" value="dueDate">
    <br><br>
    <label>Message</label>
    <input type="text" name="message" value="message">
    <br><br>
    <label>IsDone</label>
    <input type="text" name="isDone" value="isDone">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
include('footer.php');
?>
</body>
</html>
