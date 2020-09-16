<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 @media screen and (max-width:800px) {
  .topnav a{
    display:none;
  }
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
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
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #4CAF50; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color:white;
  color:black ;
}
.cim{
  height:300px;
  width:300px;
  border-radius: 300px;
}
</style>
</head>
<nav>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
<div style="position:fixed;width:100%;margin-top:-20px">

  <div style="background-image:url(img4.jpg);width:100%">
    
  <h1 style="text-align: center;color:white;font-family:Castellar ;"><img src="https://previews.123rf.com/images/suradin/suradin1201/suradin120100263/11999178-helping-hands.jpg" style="width: 50px;border-radius:100px;">&nbsp MISSION HELP</h1>
  <p style="text-align:center;color:darkgray;font-family:Vladimir Script;font-size:32px;margin:-15px" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.....a helping hand</p><br>
  </div>
  <div class="topnav">
      <span style="font-size:30px;cursor:pointer;color: white;margin-left:10px; " onclick="openNav();">&#9776; </span>
  <a class="active"href="contact.html">Contact</a>
  <a href="det.html">Donation Details</a>
  
  <a  href="https://www.instamojo.com/@koushikdaggupati">Donate</a>
  <a  href="sss.html">Home</a>
</div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="sss.html">About</a>
  <a href="prog.html">Programs</a>
  <a href="https://www.instamojo.com/@koushikdaggupati">Give</a>
  <a href="requ.html">Request help</a>
  <a href="contact.html">Volunteer</a>
  <a href="https://www.instamojo.com/@koushikdaggupati">Raise Fund</a>
  <a href="contact.html">Contact</a>
  <a href="rep.html">Report</a>

</div>
</nav>
<body>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<br>
<br>
<br><br><br><br><br><br><br><br>
<?php
$servername = "localhost";
$username = "id10238529_koushikdb";
$password = "koushik";
$dbname = "id10238529_betinfo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "SELECT * FROM log";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
echo "<h2 >Our Team</h2>";
echo "<div class=\"row\">";
echo  "<div class=\"column\">";
   echo "<div class=\"card\">";
      echo "<center>";
      echo "<img class=\"cim\" src=\"un.jpg\" alt=\"Jane\" >";
      echo '</center>';
      echo "<div class=\"container\">";
       echo "<h2 style=\"color:#4CAF50;font-family:Comic Sans MS\">{$row['name']}</h2>";
        echo "<p class=\"\title\">volunteer</p>";
        echo "<p>fell free to call at any time we are here to serve you.</p>";
        echo "<p><l style=\"color:#4CAF50;font-family:Comic Sans MS\">Call:</l>{$row['pho']}</p>";
       echo  "<p><button class=\"button\">contact</button></p>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
}

} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
