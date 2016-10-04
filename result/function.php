
<?php
require_once 'config.php';

 function connectDb()
 {
   $conn = new mysqli(servername,username,password,dbname);
  //  if(!$conn){
  //   //  die("")
  //  }
  $conn->query("set character set 'utf8'");//读库
  $conn->query("set names 'utf8'");//写库

   return $conn;

 }
?>
