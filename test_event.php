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


$sql = "SELECT * FROM result where item_list_id=1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th项目</th><th>姓名</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>avg</th><th>pb</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["item_list_id"]. "</td><td>" . $row["player_name"]. "</td><td> " . $row["result1"]. "</td><td> " . $row["result2"]. "</td><td> " . $row["result3"]. "</td><td> " . $row["result4"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>

</body>
</html>
