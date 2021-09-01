<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $type_id=$_GET["type_id"];
  include("conn.php");//包含连接数据库代码页面
  $result=$conn->query("select * from goods_type where type_id='$type_id'");//创建结果集
  $row=$result->fetch_assoc();//读取结果集第一行记录
  $type_name=$row["type_name"];
  echo '<div id="alterGoodsTypeDiv"><form action="php/updateGoodsType.php?type_id=';
  echo $type_id.'" method="post" "><table border=""  class="admin_tb"><tr><td colspan="2">商品类别信息</td></tr><tr><td>原商品类别名</td><td>';
  echo $type_name.'</td></tr><tr><td>新商品类别名</td><td><input value="" type="text" name="newTypeName"/></td></tr><tr><td colspan="2"><input style="height:30px; width:80px;border:none;background:rgba(0,255,255,0.5);color:#fff;border-radius:2px;" type="submit" value="保存" /></td></tr>';
  echo '</table></form></div>';
?>