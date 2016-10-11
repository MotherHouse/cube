<?php

$item_list_id = $_POST['item_list_id'];
$item_step = $_POST['item_step'];
$player_name = $_POST['player_name'];
$result1 = $_POST['result1'];
$result2 = $_POST['result2'];
$result3 = $_POST['result3'];
$result4 = $_POST['result4'];
$result5 = $_POST['result5'];


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





require_once 'function.php';
$conn=connectDb();

$sql = "insert into result(item_list_id,item_step,player_name,result1,result2,result3,result4,result5) values ('$item_list_id','$item_step','$player_name','$result1','$result2','$result3','$result4','$result5')";



$conn->query($sql);


if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);

}
else {
   header("Location:allresult.php");
}
















 ?>
