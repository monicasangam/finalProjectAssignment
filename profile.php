<html>
<head>
</head>
<div id="mySideNav" class="sideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Menu</a>
    <a href="profile.php">Profile</a>
    <a href="task.php">Task</a>
    <a href="logout.php">Logout</a>
</div>
<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"></span>
</div>
<script>
  function openNav()
  {
      document.getElementById("mySideNav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  function closeNav() {
      document.getElementById("mySideNav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
  }
</script>
</html>
