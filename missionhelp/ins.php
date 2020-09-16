<?php
$servername = "localhost";
$username = "id10238529_koushikdb";
$password = "koushik";
$dbname = "id10238529_betinfo";
$name=$_GET['name'];
$subject=$_GET['subject'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "insert into user(name,subject) values('$name','$subject')";
$result = $conn->query($sql);
$conn->close();
?><center>
<div style="background-color:green;border-color:3px solid balck;width:700px" >
<p clor="white">Thank you!your feeback has been recorded</p>
<a href="rep.html" style="font-color:white ;border-color:2px solid black;background-color:black">back</a>
</div>
</center>