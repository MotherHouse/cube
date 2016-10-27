<!DOCTYPE html>
<html >
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
  <div class="panel-body">
 <div class="table-responsive">
   <h1 class="page-header">
      2016珠海学生联赛
   </h1>

   <select class="form-control" onchange="self.location.href=options[selectedIndex].value">
 <option></option>
       <option value="eventshow333-1.php">三阶初赛</option>
       <option value="eventshow333-2.php">三阶复赛</option>
       <option value="eventshow333-3.php">三阶决赛</option>
       <option value="eventshow222.php">二阶</option>
       <option value="eventshow333oh.php">三阶单手</option>
       <option value="eventshow444.php">四阶</option>
       <option value="eventshow555.php">五阶</option>
       <option value="eventshowfunny.php">趣味项目</option>

   </select>
  <table class="table table-hover"><tr><th>三阶单手</th><th>姓名</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>avg</th><th>pb</th></tr>

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


$sql = "SELECT * FROM result where item_list_id=10 ORDER BY avg ";
$result = $conn->query($sql);
$avg=0;
$pb=0;
$dnf_times=0;
$ar=array();
$worst=0;
$sum=0;



if ($result->num_rows> 0) {

     while($row = $result->fetch_assoc()) {

         echo "<tr><td></td><td>" . $row["player_name"]. "</td><td> " . $row["result1"]. "</td><td> " . $row["result2"]. "</td><td> " . $row["result3"]. "</td><td> " . $row["result4"]. "</td><td> ". $row["result5"]. "</td>";
            $dnf_times=0;
            $worst=0;
            $pb=0;
            $avg=0;
            $sum=0;
            $sum1=0;
            if (strtoupper($row["result1"])!="DNF")
            {
              $pb=$row["result1"];
            }

            if (strtoupper($row["result2"])!="DNF")
           {
             if ($row["result2"]<$pb  )
             {
               $pb=$row["result2"];
             }

             if ($pb==0) {
               $pb=$row["result2"];
             }

           }

           if (strtoupper($row["result3"])!="DNF")
           {
            if ($row["result3"]<$pb or $pb==0 )
             {
               $pb=$row["result3"];
             }

           }

          if (strtoupper($row["result4"])!="DNF")
           {
             if ($row["result4"]<$pb or $pb==0)
             {
               $pb=$row["result4"];
             }

           }
          if (strtoupper($row["result5"])!="DNF")
           {
             if ($row["result5"]<$pb or $pb==0)
             {
               $pb=$row["result5"];
             }

           }

            if (strtoupper($row["result1"])!="DNF")
            {
              $worst=$row["result1"];

            }
             if (strtoupper($row["result2"])!="DNF")
            {
              if ($row["result2"]>$worst)
              {
                $worst=$row["result2"];
              }

            }
             if (strtoupper($row["result3"])!="DNF")
            {
              if ($row["result3"]>$worst)
              {
                $worst=$row["result3"];
              }
            }
             if (strtoupper($row["result4"])!="DNF")
            {
              if ($row["result4"]>$worst)
              {
                $worst=$row["result4"];
              }
            }
             if (strtoupper($row["result5"])!="DNF")
            {
              if ($row["result5"]>$worst)
              {
                $worst=$row["result5"];
              }
            }

            if (strtoupper($row["result1"])=="DNF")
            {
              $dnf_times=$dnf_times+1;
            }
            else if (strtoupper($row["result2"])=="DNF")
            {
                $dnf_times=$dnf_times+1;
            }
            else if (strtoupper($row["result3"])=="DNF")
            {
                $dnf_times=$dnf_times+1;
            }
            else if (strtoupper($row["result4"])=="DNF")
            {
                $dnf_times=$dnf_times+1;
            }
            else if (strtoupper($row["result5"])=="DNF")
            {
                $dnf_times=$dnf_times+1;
            }


            if (strtoupper($row["result1"])!="DNF")
             {
               $sum=$sum+$row[result1];
             }
            if (strtoupper($row["result2"])!="DNF")
              {
                $sum=$sum+$row[result2];
              }
            if (strtoupper($row["result3"])!="DNF")
               {
                 $sum=$sum+$row[result3];
               }
            if (strtoupper($row["result4"])!="DNF")
                {
                  $sum=$sum+$row[result4];
                }
            if (strtoupper($row["result5"])!="DNF")
                 {
                   $sum=$sum+$row[result5];
                 }

                 if ($dnf_times>=2)
                 {
                   $avg="DNF";
                 }

                 if($dnf_times==1)
                 {
                   $sum1=$sum-$pb;
                   $avg=$sum1/3;
                 }
                 if($dnf_times==0)
                 {
                  $sum1=$sum-$pb-$worst;
                   $avg=$sum1/3;
                 }
                 $avg=round($avg,2);





          echo "<td>$avg</td><td>".$pb."</td>";


          echo "</tr>";
     }
     echo "</table>";
     echo "</div>";
     echo "</div>";

} else {
     echo "0 results";
}

$conn->close();
?>

</body>
</html>
