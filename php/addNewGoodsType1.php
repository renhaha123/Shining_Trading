<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $newGoodsTypeName=$_POST["newGoodsTypeName"];
  $sql="insert into goods_type(type_name) values('$newGoodsTypeName')";
  $conn->query($sql)or die("保存失败！");
  echo '<script > alert("success"); location.href="../admin_index.html";</script>';
?>