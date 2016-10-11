<?php
$idresult = $_GET['idresult'];



if(empty($_GET['idresult']))
{
  die('idresult is empty');
}


require_once 'function.php';
$conn=connectDb();

$sql = "delete from result where idresult =$idresult";

echo "$sql";

$conn->query($sql);


if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);

}
else {
    header("Location:allresult.php");
}
















 ?>
