<?php


$item_list_id = $_POST['item_list_id'];
$item_step = $_POST['item_step'];
$player_name = $_POST['player_name'];
$result1 = $_POST['result1'];
$result2 = $_POST['result2'];
$result3 = $_POST['result3'];
$result4 = $_POST['result4'];
$result5 = $_POST['result5'];
$dnf_times=0;
$worst=0;
$pb=0;
$avg=0;
$sum=0;
$sum1=0;





if(empty($item_list_id))
{
  die('item_list_id is empty');
}
if(empty($item_step))
{
  die('item_step is empty');
}
if(empty($player_name))
{
  die('player_name is empty');
}
if(empty($result1))
{
  die('result1 is empty');
}
if(empty($result2))
{
  die('result2 is empty');
}
if(empty($result3))
{
  die('result3 is empty');
}
if(empty($result4))
{
  die('result4 is empty');
}
if(empty($result5))
{
  die('result5 is empty');
}
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







require_once 'function.php';
$conn=connectDb();

$sql = "insert into result(item_list_id,item_step,player_name,result1,result2,result3,result4,result5,best,avg) values ('$item_list_id','$item_step','$player_name','$result1','$result2','$result3','$result4','$result5','$pb','$avg')";



$conn->query($sql);


if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);

}
else {
   header("Location:allresult.php");
}
















 ?>
