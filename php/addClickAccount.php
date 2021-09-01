<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $goods_id=$_GET["goods_id"];
  $result=$conn->query("select * from sale_goods where goods_id='$goods_id'");//创建结果集
  $row=$result->fetch_assoc();
  $clickAccount=$row["clickAccount"];
  $clickAccount++;
  $sql="update sale_goods set clickAccount='$clickAccount' where goods_id='$goods_id'";
  $conn->query($sql)or die("保存失败！");
?>