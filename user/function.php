
<?php
require_once 'config.php';

 function connectDb()
 {
   $conn = new mysqli(servername,username,password,dbname);
  //  if(!$conn){
  //   //  die("")
  //  }

   return $conn;

 }
?>
