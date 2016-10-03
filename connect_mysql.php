<html>
<head>
</head>
<body>

  <?php

  $servername = "119.29.178.222";
  $username = "root";
  $password = "zheng1206";
  $dbname = "cube";

$conn = new mysqli($servername,$username ,$password,$dbname);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

  ?>
</body>

</html>
