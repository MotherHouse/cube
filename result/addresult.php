<?php
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



  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                成绩录入
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="addresult_server.php" method="post">
                          <div class="form-group">
                              <label>项目</label>
                              <input class="form-control" name="item_list_id">

                          </div>


          <div class="form-group">
              <label>轮次:</label>
              <select class="form-control" name="item_step" >
                  <option>初赛</option>
                  <option>复赛</option>
                  <option>决赛</option>
              </select>
          </div>
          <div class="form-group">
              <label>姓名:</label>
              <select class="form-control" name="player_name" >
                <?php

                $conn = connectDb();
                $conn->query("set character set 'utf8'");//读库
                $conn->query("set names 'utf8'");//写库
                $result =$conn->query("select player_name from player where event_id=1");
                $dataCount = $result->num_rows;

                if ($result->num_rows> 0) {
                       while($row = $result->fetch_assoc()) {

                        $player_name = $row['player_name'];
                        echo "<option>$player_name</option>";


                    }

                 }
                ?>

              </select>
          </div>

          <div class="form-group">成绩：
            <br>
            <div class="form-group">
              <input class="form-control" name="result1">
            </div>
            <div class="form-group">
              <input class="form-control" name="result2">
            </div>
            <div class="form-group">
              <input class="form-control" name="result3">
            </div>
            <div class="form-group">
              <input class="form-control" name="result4">
            </div>
            <div class="form-group">
              <input class="form-control" name="result5">
            </div>
          </div>


          <input type = "submit" value="提交">
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
