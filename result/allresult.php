<?php
require_once 'function.php'


 ?>
<html>
<head>
  <title>result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <a href="addresult.php">插入成绩</a>



  <div class="row">
      <div class="col-md-6">
           <!--    Hover Rows  -->
          <div class="panel panel-default">
              <div class="panel-heading">
                  成绩单
              </div>
              <div class="panel-body">
                  <div class="table-responsive">
              <table class="table table-hover"><tr><th>项目</th><th>轮次</th><th>姓名</th><th>详情</th>


<?php
error_reporting(0);
$conn = connectDb();
$conn->query("set character set 'utf8'");//读库
$conn->query("set names 'utf8'");//写库
$result =$conn->query("select * from item_list join result on item_list.item_list_id=result.item_list_id");

if ($result->num_rows> 0) {
       while($row = $result->fetch_assoc()) {
         $idresult=$row['idresult'];
        $item_list_id = $row['item_list_id'];
        $item_step = $row['item_step'];
        $player_name = $row['player_name'];
        $result1 = $row['result1'];
        $result2 = $row['result2'];
        $result3 = $row['result3'];
        $result4 = $row['result4'];
        $result5 = $row['result5'];
         echo "<tr><td>$item_list_id</td><td>$item_step</td><td>$player_name</td><td>$result1</td><td>$result2</td><td>$result3</td><td>$result4</td><td>$result5</td><td><a href='editresult.php?idresult=$idresult'>修改</a></td><td><a href='deleteresult.php?idresult=$idresult'>删除</a></td></tr>";
    }

 }
?>

      </table>
    </div>
  </div>
</div>






</body>
</html>
