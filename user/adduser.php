<?php

$player_name = $_POST['player_name'];
$event_id = $_POST['event_id'];
if(empty($player_name))
{
  die('player_name is empty');
}


  if(empty($event_id))
  {
    die('event_id is empty');

  }
require_once 'function.php';
$conn=connectDb();

$conn->query("insert into player(event_id,player_name) values('$event_id','$player_name')");

if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);

}
else {
  header("Location:alluser.php");

}
















 ?>
