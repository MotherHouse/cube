<?php
require_once 'function.php'


 ?>
<html>
<head>
</head>
<body>
  <a href="adduser.html">添加用户</a>
<?php


$conn = connectDb();
$conn->query("set character set 'utf8'");//读库
$conn->query("set names 'utf8'");//写库
$result =$conn->query("SELECT * FROM player");
$dataCount = $result->num_rows;
// print_r($result);
// echo "<br>";


if ($result->num_rows> 0) {
     echo "<table><tr><th>eventsid</th><th>player_name</th>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
      //  print_r($row);
      //  echo "<br>";
$event_id=$row['event_id'];
$player_name=$row['player_name'];
         echo "<tr><td>$event_id</td><td>$player_name</td>";
    }
     echo " </table>";
   }




?>




</body>
</html>
