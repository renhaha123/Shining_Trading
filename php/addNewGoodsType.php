<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  echo '<div id="addGoodsNameDiv"><form action="php/addNewGoodsType1.php" method="post"><table border="1" width="" class="admin_tb"><tr><td>请输入新商品类别名<input type="text" name="newGoodsTypeName"/></td></tr><tr><td><input style="height:30px; width:80px;border:none;background:rgba(0,255,255,0.5);color:#fff;border-radius:2px;" type="submit" value="提交" /></td></tr></table>';
  echo '</form></div>';
?>