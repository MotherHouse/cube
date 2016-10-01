
  <?php

  $servername = "119.29.178.222";
  $username = "root";
  $password = "zheng1206";
  $dbname = "events";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("连接失败: " . $conn->connect_error);
  }

  $sql = "SELECT event_name, city, event_date FROM events";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
          echo "<br> event_name: ". $row["event_name"]. " - city: ". $row["city"]. " - event_date " . $row["event_date"];
      }
  } else {
      echo "0 个结果";
  }
  $conn->close();
  ?>
