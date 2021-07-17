
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.b1{
   
    text-align: left;
    color:yellow;
    font-weight: bold;
    font-size: 26px;
   
}
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: pink;
  
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (min-height: 300px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="#">E-Books</a>
  <ul>
  <li><a href="cse.php">CSE</a></li>
  <li><a href="ece.php">ECE</a></li>
  <li><a href="mtech.php">M TECH</a></li>
  <li><a href="mech.php">MECH</a></li>
  
  </ul>
  <a href="#">Core Subjects of CSE Branch</a>
  <ul>
  <li><a href="dataf.php">1. Data Structures</a></li>
  <li><a href="dbmsf.php">2. Database Management System</a></li>
  <li><a href="osf.php">  3. Operating Systems</a></li>
  <li><a href="daaf.php">4. Design and analysis of algorithms</a></li>
  <li><a href="webf.php">5. Web Technologies</a></li>
  <li><a href="mobf.php">6. Mobile Application Dev</a></li>
  <li><a href="javaf.php">7. Java</a></li>
  <li><a href="compf.php">8. Computer Neworks</a></li>

  </ul>
  
  <a href="admin.php">Admin</a>

</div>

<div class="b1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 


<?php


?>