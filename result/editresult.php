<?php

error_reporting(0);
require_once 'function.php'


 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php
error_reporting(0);

// echo $_GET['idresult'];
//
if (!empty($_GET['idresult']))
{
  $conn = connectDb();


  $idresult = intval($_GET['idresult']);


  $sql = "select * from result where idresult=".$idresult;
  // echo "$sql";
  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  // print_r($row);

  // echo "$row[ídresult]";

} else {
  die ('idresult not define!');
}

?>

<div class="row">
   <div class="col-lg-12">
       <div class="panel panel-default">
           <div class="panel-heading">
               成绩修改
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                       <form role="form" action="editresult_server.php" method="post">


                           <div hidden="hidden"div class="form-group">idresult:
                         <input type = "text" name="idresult" value="<?php echo $row['idresult']; ?>">
                         </div>

                       <div class="form-group">项目：
                         <br>
                         <input class="form-control" name="item_list_id" value="<?php echo $row['item_list_id']; ?>">
                       </div>


                       <div class="form-group">轮次：
                         <br>
                         <input class="form-control" name="item_step" value="<?php echo $row['item_step']; ?>">
                       </div>
                       <div class="form-group">姓名：
                         <br>
                         <input class="form-control" name="player_name" value="<?php echo $row['player_name']; ?>">
                       </div>




         <div class="form-group">成绩：
           <br>
           <div class="form-group">
             <input class="form-control" name="result1" value="<?php echo $row['result1']; ?>">
           </div>
           <div class="form-group">
             <input class="form-control" name="result2" value="<?php echo $row['result2']; ?>">
           </div>
           <div class="form-group">
             <input class="form-control" name="result3" value="<?php echo $row['result3']; ?>">
           </div>
           <div class="form-group">
             <input class="form-control" name="result4" value="<?php echo $row['result4']; ?>">
           </div>
           <div class="form-group">
             <input class="form-control" name="result5" value="<?php echo $row['result5']; ?>">
           </div>


         </div>


         <button type="submit" class="btn btn-primary">修改</button>
     </form>
   </div>
   <!-- /.col-lg-6 (nested) -->
   </div>
   <!-- /.row (nested) -->
   </div>
   <!-- /.panel-body -->
   </div>
   <!-- /.panel -->
   </div>
   <!-- /.col-lg-12 -->
   </div>







</body>
</html>
