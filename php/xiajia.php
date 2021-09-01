<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $goods_id=$_GET["goods_id"];
  $conn->query("update sale_goods set flag=0 where goods_id='$goods_id'");//创建结果集
  echo "<script> alert('下架成功！'); location.href='user_info.php';</script>";
?>