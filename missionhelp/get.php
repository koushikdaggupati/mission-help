<html><center>
    <a href="rep.html"style="background-color:red;position:fixed;allign:rigth">back</a>
    </center>
</html>
<style>
h2{
    font-color:green;
}
table, th, td {
  border: 1px solid black;
}
</style>
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
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row["name"]}</td>";
        echo "<td>{$row["subject"]}</td>";
        echo "</tr>";
    }
   echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>