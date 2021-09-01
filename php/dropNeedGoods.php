<?php
  include("conn.php");//包含连接数据库代码页面
  $goods_id=$_GET["goods_id"];
  $sql="delete from need_goods where goods_id='$goods_id'";
  $conn->query($sql)or die("失败！");
  $result=$conn->query("select * from need_goods ");//创建结果集
  echo '<div id="sale_goodsDiv"><table border="1" width="" ><tr><th colspan="7">求购商品信息</th></tr><tr><td>商品ID</td><td>商品名</td><td>价格</td><td>交易地点</td><td>操 作</td></tr>';
  $i=0;
  while($row=$result->fetch_assoc()){
   echo '<tr><td id="dropNeedGoods';
   echo $i.'">';
   echo $row["goods_id"].'</td><td>';
   echo $row["goods_name"].'</td><td>';
   echo $row["price"].'</td><td>';
   echo $row["deal_place"].'</td>';
   echo '<td><a onClick="dropNeedGoods(';
   echo $i.')">移除</a></td> ';
   $i++;
  }
  echo '</table></div>';
?>