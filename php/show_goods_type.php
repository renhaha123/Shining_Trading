<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $result=$conn->query("select * from goods_type");//创建结果集
  $n=$result->num_rows;
  echo '<div id="goodsTypeDiv"><table border="1" width="" class="admin_tb" ><tr><th colspan="4">商品分类信息</th></tr><tr><td>商品类别ID</td><td>商品类别名</td><td>操 作</td><td>操 作</td></tr>';
  for($i=1;$i<=$n;$i++){
   $row=$result->fetch_assoc();
   echo '<tr><td id="type_id';
   echo $i.'">';
   echo $row["type_id"].'</td><td>';
   echo $row["type_name"].'</td><td>';
   echo '<a onClick="alterGoodsType(';
   echo $i.')">修改</a></td><td><a href="php/deleteGoodsType.php?type_id=';
   echo $row["type_id"].')">删除</a></td> ';
  }
  echo '<tr><td colspan="4"><a onClick="addNewGoodsType()">新增商品类别</a></td></tr></table></div>';
?>