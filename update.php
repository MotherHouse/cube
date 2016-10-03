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
$avg=0;
$pb=0;
$dnf_times=0;
$ar=array();
$worst=0;
$sum=0;



if ($result->num_rows > 0) {
     echo "<table><tr><th>项目</th><th>姓名</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>avg</th><th>worst</th><th>pb</th><th>dnf_times</th><th>sum</th><th>sum1</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {

         echo "<tr><td>" . $row["item_list_id"]. "</td><td>" . $row["player_name"]. "</td><td> " . $row["result1"]. "</td><td> " . $row["result2"]. "</td><td> " . $row["result3"]. "</td><td> " . $row["result4"]. "</td><td> ". $row["result5"]. "</td>";
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


                 $id = $row["idresult"];

                 $sql_update = "UPDATE result
                                SET  best= '$pb',worst= '$worst',avg= '$avg'

                                WHERE idresult = '$id'";
                 echo "$sql_update"."<br>";

                $resutl1 =  $conn->query($sql_update);
                echo "Result is "."$result1->num_rows"."<br>";




          echo "<td>$avg</td><td>".$worst."</td><td>".$pb."</td><td>".$dnf_times."</td><td>".$sum."</td><td>".$sum1."</td>";


          echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>

</body>
</html>
