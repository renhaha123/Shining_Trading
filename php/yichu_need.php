<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $goods_id=$_GET["goods_id"];
  $sql2="delete from need_goods where goods_id='$goods_id'";
  $conn->query($sql2) or die('删除下架商品失败！');
  echo "<script> alert('移除成功！'); location.href='user_info.php';</script>";
?>