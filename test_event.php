<!DOCTYPE html>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">，
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "119.29.178.222";
$username = "root";
$password = "zheng1206";
$dbname = "cube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$conn->query("set character set 'utf8'");//读库
$conn->query("set names 'utf8'");//写库


$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>赛事名称</th><th>城市</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["event_id"]. "</td><td>" . $row["event_name"]. " " . $row["city"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>

</body>
</html>
