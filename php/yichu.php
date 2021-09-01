<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  error_reporting(7);//只显示严重错误提示
  include("conn.php");//包含连接数据库代码页面
  $goods_id=$_GET["goods_id"];
  $result=$conn->query("select * from sale_goods where goods_id='$goods_id'");//创建结果集
  $row=$result->fetch_assoc();
  $photo1=$row["photo1"];
  $photo2=$row["photo2"];
  $photo3=$row["photo3"];
  $sql1="delete from liuyan where goods_id='$goods_id'";
  $conn->query($sql1) or die('删除留言失败！');
  $sql2="delete from sale_goods where goods_id='$goods_id'";
  $conn->query($sql2) or die('删除下架商品失败！');
  $lujing1="../photos/".$photo1;//图片路径
  unlink($lujing1);//删除下架商品在服务器上的商品图片
  $lujing2="../photos/".$photo2;//图片路径
  unlink($lujing2);//删除下架商品在服务器上的商品图片
   $lujing3="../photos/".$photo3;//图片路径
  unlink($lujing3);//删除下架商品在服务器上的商品图片
  echo "<script> alert('移除成功！'); location.href='user_info.php';</script>";
?>